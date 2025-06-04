<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    public function login(Request $request){

        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only(['email','password']);

        if(Auth::guard('institution')->attempt($credentials)){
            return redirect()->route('show.post')->with('message', 'Login Successful Welcome Back');

        }else if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.dashboard')->with('message', 'Login Successful Welcome Back');

        }else if(Auth::guard('student')->attempt($credentials)){
            return redirect()->route('show.home')->with('message', 'Login Successful Welcome Back');

        }else{
            $errors = ['Invalid Login Credentials'];
            return redirect()->back()->withErrors($errors);
        }


    }


}
