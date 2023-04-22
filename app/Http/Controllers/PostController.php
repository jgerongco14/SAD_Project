<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function updateProfile(Request $request, $id)
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

        $user = User::find($id);
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

    public function updatePhoto(Request $request, $id)
    {
        // Validate the form data, including the file
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming file is an image with max size of 2MB
        ]);


        $user = User::find($id);
        $path = $request->file('photo')->store('public/image');
        $user->photo = $path;
        $result = $user->save();

        if ($result) {
            return redirect()->back()->with('success', 'Changed Profile Picture Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something goes wrong');
        }
    }
}
