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

    public function registration()
    {
        return view('auth.registration');
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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('username', '=', $request->username)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('id', $user->id);
                if ($request->username === 'admin') {
                    return redirect('admin');
                } else {
                    return redirect()->route('home', ['id' => $user->id]);
                }
            } else {
                return back()->with('fail', 'Password not matches.');
                return redirect()->back()->with(['input' => $request->all()]);
            }
        } else {
            return back()->with('fail', 'This username is not register');
            return redirect()->back()->with(['input' => $request->all()]);
        }
    }

    // public function loginAdmin(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $user = User::where('username', '=', $request->username)->first();

    //     if ($user) {
    //         if (Hash::check($request->password, $user->password)) {
    //             $request->session()->put('id', $user->id);
    //             if ($request->username === 'admin') {
    //                 return redirect('admin');
    //             } else {
    //                 return redirect('home');
    //             }
    //         } else {
    //             return back()->with('fail', 'Password not matches.')->withInput($request->except('password'));
    //         }
    //     } else {
    //         return back()->with('fail', 'This username is not registered.')->withInput($request->except('password'));
    //     }
    // }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgetpassword()
    {
    }
}
