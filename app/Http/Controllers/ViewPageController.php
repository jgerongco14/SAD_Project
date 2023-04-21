<?php

namespace App\Http\Controllers;

use App\Models\User;


class ViewPageController extends Controller
{

    public function registration()
    {
        return view('auth.registration');
    }
}
