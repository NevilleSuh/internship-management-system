<?php

namespace App\Http\Controllers\Institution\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return view('institution.auth.login');
    }

    public function login(Request $request){

        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only(['email','password']);

        if(Auth::guard('institution')->attempt($credentials)){
            return redirect()->route('show.post')->with('message', 'Login Successful Welcome Back');

        }else{
            $errors = ['Invalid Login Credentials'];
            return redirect()->back()->withErrors($errors);
        }


    }

}
