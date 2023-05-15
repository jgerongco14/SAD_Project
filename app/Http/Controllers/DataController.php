<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Tournament_Players;


class DataController extends Controller
{

    //naay need i change
    public function displayData()
    {
        // Fetch the data based on the ID
        $user = User::find(Auth::user()->id);

        //specific for selectors
        $sex = $user->sex;
        $role = $user->role;

        // Pass the data to the view and return it
        return view('profile.my_profile', compact('user', 'sex', 'role'));
    }


    public function showImage()
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $path = asset('storage/' . $user->photo);
            return response()->json([
                'photo' => $path,
            ]);
        } else {
            return response()->view('Something Wrong');
        }
    }

    public function showPlayerTable()
    {
        $users = User::whereIn('role', ['player', 'player/coach'])
            ->get(); // Fetch data for player and player/coaches
        return view('list.player', ['users' => $users]); // Pass the player data to the view
    }

    public function showCoachTable()
    {
        $users = User::whereIn('role', ['coach', 'player/coach'])
            ->get(); // Fetch data for coaches and player/coaches
        return view('list.coach', ['users' => $users]); // Pass the player data to the view
    }

    public function displayTourna()
    {
        //player side
        $tournament = Tournament::whereIn('status', ['Approve'])
            ->get();
        return view('tournament.tourna_content', ['tournament' => $tournament]);
    }

    public function unapprovedTournament()
    {
        $tournament = Tournament::whereNull('status')->get();
        return view('admin.tournament_approval', ['tournament' => $tournament]);
    }

    public function viewTourna($id)
    {
        $tournament = Tournament::find($id);

        return view('tournament.view_tourna', ['tournament' => $tournament]);
    }

    public function registrationUser()
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $path = asset('storage/' . $user->photo);
            return response()->json([
                'id' => $user->id,
                'firstName' => $user->firstName,
                'middleInitial' => $user->middleInitial,
                'alias' => $user->alias,
                'lastName' => $user->lastName,
                'suffix' => $user->suffix,
                'sex' => $user->sex,
                'birthdate' => $user->birthdate,
                'nationality' => $user->nationality,
                'email' => $user->email,
                'photo' => $path,
            ]);
        } else {
            return response()->view('Something Wrong');
        }
    }

    public function regUserTournament($tournament_id)
    {
        $tournament = Tournament::find($tournament_id);
        $path = asset('storage/' . $tournament->admin_gcash);
        return response()->json([
            'tournament_title' => $tournament->tournament_title,
            'registration_fee' => $tournament->registration_fee,
            'admin_gcash' => $path,
        ]);
    }

    public function unapprovedPlayers($tournamentId)
    {
        $tournament_players = Tournament_Players::where('tournament_id', $tournamentId)
            ->whereNull('status')
            ->with(['users' => function ($query) {
                $query->select('id', 'photo', 'firstName','middleInitial','alias','lastName','suffix');
            }])
            ->get(['id','user_id', 'player_proof_of_payment']);

        $tournament_players->transform(function ($player) {
            $player->photo = asset('storage/' . $player->users->photo);
            $player->player_proof_of_payment = asset('storage/' . $player->player_proof_of_payment);
            return $player->toArray();
        });

        return response()->json($tournament_players);
    }

    public function approvedPlayers($tournamentId)
    {
        $tournament_players = Tournament_Players::where('tournament_id', $tournamentId)
            ->whereIn('status', ['Approve'])
            ->with(['users' => function ($query) {
                $query->select('id', 'photo', 'firstName','middleInitial','alias','lastName','suffix','sex','nationality','email','instagramLink','facebookLink','twitterLink');
            }])
            ->get(['id','user_id', 'player_proof_of_payment','wins','loss','games','ranking']);

        $tournament_players->transform(function ($player) {
            $player->photo = asset('storage/' . $player->users->photo);
            $player->player_proof_of_payment = asset('storage/' . $player->player_proof_of_payment);
            return $player->toArray();
        });

        return response()->json($tournament_players);
    }

    public function displayEvents()
    {
        $tournament = Tournament::whereIn('status', ['Approve'])->get();
        return view('events.events', ['tournament' => $tournament]);
    }
    

}
