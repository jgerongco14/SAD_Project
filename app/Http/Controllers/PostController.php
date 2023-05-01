<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming file is an image with max size of 2MB
        ]);


        $user =  User::find(Auth::user()->id);
        $path = $request->file('photo')->store('public/image');
        $user->photo = $path;
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
            'tournament_logo' => 'required',
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
            'contactNumber' => 'required',
            'email' => 'required',
            'sponsor' => 'required',
            'poster' => 'required',
            'poster_title' => 'required',
            'poster_description' => 'required',
            'admin_gcash' => 'required',
            'proof_of_payment' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $tournament = new Tournament();
        $tournament->user_id = $user->id;
        $tournament->tournament_title = $request->input('tournament_title');
        $tournament->tournament_logo = $request->input('tournament_logo');
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
        $tournament->poster = $request->input('poster');
        $tournament->poster_title = $request->input('poster_title');
        $tournament->poster_description = $request->input('poster_description');
        $tournament->admin_gcash = $request->input('admin_gcash');
        $tournament->proof_of_payment = $request->input('proof_of_payment');

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
}
