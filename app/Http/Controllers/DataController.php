<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class DataController extends Controller
{

    //naay need i change
    public function displayData()
    {

        // Fetch the data based on the ID
        $user = Auth::user();

        //specific for selectors
        $sex = $user->sex;
        $role = $user->role;

        // Pass the data to the view and return it
        return view('profile.my_profile', compact('user','sex','role'));
    }

    public function showImage()
    {
        $user = Auth::user(); // Assuming you have an "Image" model and a "images" table in your database

        if ($user) {
            $path = storage_path('app/' . $user->photo); // Assuming you have stored the image file in the storage/app/ directory
            return response()->file($path);
        } else {
            // Handle image not found
            return response()->view('errors.image_not_found');
        }
    }

    public function showtable()
    {
        $users = User::all(); // Fetch data from user table
        return view('table',['users' => $users]); /// Pass the users data to the view
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
}
