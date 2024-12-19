<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function view_register(){
        return view('auth.register');
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validate)) {
            return redirect('/home');
        }
        return redirect()->back();
    }
    public function register(Request $request){
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        if (!$validate) {
           return redirect()->back();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/');

    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
