<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function registerUser(Request $request) {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);

        $user = new User;

        $user->username = $request->input('username');
        $user->password = $request->input('password');

        $user->save();

        return redirect('home')->with('success','Data Saved');

    }

}
