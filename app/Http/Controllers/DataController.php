<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


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
      
        if($user) {
            $path = asset('storage/' . $user->photo);
            return response()->json([
                'photo' => $path,
            ]);
        }else{
            return response()->view('Something Wrong');
        }
    }


    public function showtable()
    {
        $users = User::all(); // Fetch data from user table
        return view('table', ['users' => $users]); /// Pass the users data to the view
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
        return view('admin.admin', ['tournament' => $tournament]);
    }

    public function viewTourna($id)
    {
        $tournament = Tournament::find($id);
    
        return view('tournament.view_tourna', ['tournament' => $tournament]);
    }
    
}
