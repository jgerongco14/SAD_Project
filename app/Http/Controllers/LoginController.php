<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function home()
    {
        return view('home.home');
    }

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'alias' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = new User();

        $user->alias = $request->input('alias');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $result = $user->save();

        if ($result) {
            return redirect()->back()->with('success', 'You have registered successfully');
        } else {
            return redirect()->back()->with('fail', 'Something goes wrong');
        }
    }


  public function loginUser(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($validatedData)) {
            $user = Auth::user();
            $request->session()->put('id', $user->id);
            return redirect()->route('home');
        } else {
            return back()->with('fail', 'Invalid username or password.')->withInput($validatedData);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgetpassword()
    {
    }
}
