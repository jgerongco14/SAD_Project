<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Tournament_Players;

class PostController extends Controller
{
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'nullable',
            'middleInitial' => 'nullable',
            'lastName' => 'nullable',
            'suffix' => 'nullable',
            'alias' => 'nullable',
            'sex' => 'nullable',
            'role' => 'nullable',
            'address' => 'nullable',
            'province' => 'nullable',
            'city' => 'nullable',
            'country' => 'nullable',
            'nationality' => 'nullable',
            'birthdate' => 'nullable',
            'mobileNumber' => 'nullable',
            'telephoneNumber' => 'nullable',
            'facebookLink' => 'nullable',
            'instagramLink' => 'nullable',
            'twitterLink' => 'nullable',
            'email' => 'nullable',
        ]);

        $user = User::find(Auth::user()->id);
        $user->firstName = $request->input('firstName');
        $user->middleInitial = $request->input('middleInitial');
        $user->lastName = $request->input('lastName');
        $user->suffix = $request->input('suffix');
        $user->alias = $request->input('alias');
        $user->sex = $request->input('sex');
        $user->role = $request->input('role');
        $user->address = $request->input('address');
        $user->province = $request->input('province');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->nationality = $request->input('nationality');
        $user->birthdate = $request->input('birthdate');
        $user->mobileNumber = $request->input('mobileNumber');
        $user->telephoneNumber = $request->input('telephoneNumber');
        $user->facebookLink = $request->input('facebookLink');
        $user->instagramLink = $request->input('instagramLink');
        $user->twitterLink = $request->input('twitterLink');
        $user->email = $request->input('email');


        $result = $user->save();

        if ($result) {
            return redirect()->back()->with('success', 'All Data Updated Successfully!');
        } else {
            return redirect()->back()->with('fail', 'Please Check It Again!');
        }
    }

    public function updatePhoto(Request $request)
    {
        // Validate the form data, including the file
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // Assuming file is an image with max size of 2MB
        ]);


        $user = User::find(Auth::user()->id);
        $user->photo = $request->file('photo')->store('image/profile', 'public');
        $result = $user->save();

        if ($result) {
            return redirect()->back()->with('success', 'Changed Profile Picture Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something goes wrong');
        }
    }

    public function create_tournamentForm(Request $request)
    {
        $this->validate($request, [
            'tournament_title' => 'required',
            'tournament_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'date_of_the_tournament' => 'required',
            'start_date_of_registration' => 'required',
            'end_date_of_registration' => 'required',
            'category' => 'required',
            'age_range' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'tournament_description' => 'required',
            'name_of_organizer' => 'required',
            'contactNumber' => 'required|numeric',
            'email' => 'required',
            'sponsor' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'poster_title' => 'required',
            'poster_description' => 'required',
            'admin_gcash' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'registration_fee' => 'required',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ], [
            'tournament_logo.max' => 'The tournament logo must not be larger than 2 MB.',
            'poster.max' => 'The tournament poster must not be larger than 2 MB.',
            'admin_gcash.max' => 'The admin GCash QR code must not be larger than 2 MB.',
            'proof_of_payment.max' => 'The proof of payment must not be larger than 2 MB.',
        ]);



        $user = User::find(Auth::user()->id);

        $tournament = new Tournament();
        $tournament->user_id = $user->id;
        $tournament->tournament_title = $request->input('tournament_title');
        $tournament->tournament_logo = $request->file('tournament_logo')->store('image/tournament/logo', 'public');
        $tournament->date_of_the_tournament = $request->input('date_of_the_tournament');
        $tournament->start_date_of_registration = $request->input('start_date_of_registration');
        $tournament->end_date_of_registration = $request->input('end_date_of_registration');
        $tournament->category = $request->input('category');
        $tournament->age_range = $request->input('age_range');
        $tournament->address = $request->input('address');
        $tournament->province = $request->input('province');
        $tournament->city = $request->input('city');
        $tournament->tournament_description = $request->input('tournament_description');
        $tournament->name_of_organizer = $request->input('name_of_organizer');
        $tournament->contactNumber = $request->input('contactNumber');
        $tournament->email = $request->input('email');
        $tournament->sponsor = $request->input('sponsor');
        $tournament->poster = $request->file('poster')->store('image/tournament/poster', 'public');
        $tournament->poster_title = $request->input('poster_title');
        $tournament->poster_description = $request->input('poster_description');
        $tournament->admin_gcash = $request->file('admin_gcash')->store('image/tournament/admin_gcash', 'public');
        $tournament->registration_fee = $request->input('registration_fee');
        $tournament->proof_of_payment = $request->file('proof_of_payment')->store('image/tournament/proof_of_payment', 'public');

        $result = $tournament->save();

        if ($result) {
            return redirect()->back()->with('success', 'Tournament Request is now sent! Please wait for the approval of Admin');
        } else {
            return redirect()->back()->with('fail', 'Please Check It Again!');
        }
    }

    public function approvedTournamentByAdmin($id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->status = 'approve';
        $result = $tournament->save();

        if ($result) {
            return redirect()->back()->with('success', 'The tournament has been approved!');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }

    public function getPlayersRegistration(Request $request)
    {
        $request->validate([
            'tournament_id' => 'required',
            'user_id' => 'required',
            'player_proof_of_payment' => 'required|image|max:10240',
        ]);

        $tournament_id = $request->input('tournament_id');
        $user_id = $request->input('user_id');

        // Check if the user is already registered and their status is "Approved"
        $existingRegistration = Tournament_Players::where('user_id', $user_id)
            ->where('user_id', $user_id)
            ->where('status', 'Approve')
            ->first();

        if ($existingRegistration) {
            return redirect()->back()->with('fail', 'You are already registered for this tournament.');
        }

        $tournament_players = new Tournament_Players();
        $tournament_players->user_id = $user_id;
        $tournament_players->tournament_id = $tournament_id;
        $tournament_players->player_proof_of_payment = $request->file('player_proof_of_payment')->store('image/registration/proof_of_payment', 'public');
        $tournament_players->ranking = '0';
        $tournament_players->wins = '0';
        $tournament_players->loss = '0';
        $tournament_players->games = '0';
        $result = $tournament_players->save();

        if ($result) {
            return redirect()->back()->with('success', 'Your registration has been sent. Please wait for approval!');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }


    public function tournamentAdmin($id)
    {
        $tournament_players = Tournament_Players::findOrFail($id);
        $tournament_players->status = 'Approve';
        $result = $tournament_players->save();

        if ($result) {
            return redirect()->back()->with('success', 'The player registration has been approved!');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }
}
