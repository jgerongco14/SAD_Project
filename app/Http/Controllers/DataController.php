<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DataController extends Controller
{
    
    public function displayData($id)
    {
        // Fetch the data based on the ID
        $user = User::find($id);

        // Pass the data to the view and return it
        return view('partials.navbar2', compact('user'));
    }
}
