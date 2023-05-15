<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clubs;
use Illuminate\Support\Facades\Auth;
use App\Models\UserClub;


class ClubController extends Controller
{
    public function createClub(Request $request)
    {
        // Validate the form data, including the file
        $request->validate([
            'clubName' => 'required',
            'clubLogo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // Assuming file is an image with max size of 2MB
            'clubPresident' => 'required',
            'originCity' => 'required',
        ]);


        $user = User::find(Auth::user()->id);

        $clubs = new Clubs();
        $clubs->user_id = $user->id;
        $clubs->clubName =  $request->input('clubName');
        $clubs->clubLogo = $request->file('clubLogo')->store('image/clubs/clubLogo', 'public');
        $clubs->clubPresident =  $request->input('clubPresident');
        $clubs->originCity =  $request->input('originCity');
        $clubs->status = 'President';
        $result = $clubs->save();

        if ($result) {
            return redirect()->back()->with('success', 'Create Club Successfully!');
        } else {
            return redirect()->back()->with('fail', 'Something goes wrong');
        }
    }

    public function viewListClubs()
    {
        $clubs = Clubs::whereIn('status', ['President'])->get();
        return view('clubs.clubs', compact('clubs'));
    }

    public function joinClub(Request $request)
    {
        $userId = auth()->user()->id;
        $clubId = $request->input('club_id');

        // Check if the user is already registered in the club
        $existingUserClub = UserClub::where('user_id', $userId)
            ->where('club_id', $clubId)
            ->first();

        if ($existingUserClub) {
            return redirect()->back()->with('fail', 'You are already a member of this club.');
        }

        // Create a new UserClub entry
        $userClub = new UserClub();
        $userClub->user_id = $userId;
        $userClub->club_id = $clubId;
        $result = $userClub->save();

        if ($result) {
            return redirect()->back()->with('success', 'Welcome to the Club!');
        } else {
            return redirect()->back()->with('fail', 'Please Check It Again!');
        }
    }

    public function viewClub($id)
    {
        $club = Clubs::find($id);
    
        return view('clubs.view_club', ['club' => $club]);
    }    

    public function viewClubMembers($clubId)
    {
        $userclub = UserClub::where('club_id', $clubId)
            ->with(['users' => function ($query) {
                $query->select('id','photo', 'firstName', 'middleInitial', 'alias', 'lastName', 'suffix','sex','nationality','email','instagramLink','facebookLink','twitterLink');
            }])
            ->get(['id', 'user_id']);

        $userclub->transform(function ($player) {
            $player->photo = asset('storage/' . $player->users->photo);
            return $player->toArray();
        });

        return response()->json($userclub);
    }
}
