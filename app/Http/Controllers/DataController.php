<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DataController extends Controller
{
    public function profileData()
    {
        $user = User::get(); // Fetch data from the 'data' table in the database
        return view('fetch_data', ['data' => $user]); // Pass the data to a view
    }
    
    public function fetchData()
    {
        $data1 = User::where('field1', 'value1')->first(); // Fetch data based on field1 and value1
        $data2 = User::where('field2', 'value2')->first(); // Fetch data based on field2 and value2
        return view('fetch_data', ['data1' => $data1, 'data2' => $data2]); // Pass the data to the view and render it
    }
}
