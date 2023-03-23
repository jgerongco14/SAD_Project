<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function registerUser(Request $request) {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);

        $user = new User();

        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->password = Hash::make($request->input('password'));
        $result = $user->save();

        if ($result) {
            return redirect()->back()->with('success', 'You have registered successfully');
        } else {
            return redirect()->back()->with('fail', 'Something goes wrong');
        }
    }

}
