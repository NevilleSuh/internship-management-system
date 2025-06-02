<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        // dd($request);

        $request->validate([
            'matricule' => 'required',
            'password' => 'required',
        ]);
        // hello

        $credentials = $request->only(['matricule', 'password']);
        $credentials['matricule'] = strtoupper($credentials['matricule']);

        if($request->type == 'admin'){
            if(Auth::guard('admin')->attempt($credentials)){
                return redirect()->route('show.dashboard')->with('message', 'Login Successful Welcome Back');
            }else{
                $errors = ['Invalid Login Credentails'];
                return redirect()->back()->withErrors($errors);
            }
        }

        if($request->type == 'student'){

            // dd($credentials);
            if(Auth::guard('student')->attempt($credentials)){
                return redirect()->route('show.home')->with('message', 'Login Successful Welcome Back');
            }else{
                $errors = ['Invalid Login Credentails'];
                return redirect()->back()->withErrors($errors);
            }
        }

    }


}
