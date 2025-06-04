<?php

namespace App\Http\Controllers\Student\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Student;
use Hash;
use Auth;
use Session;


class AuthController extends Controller
{
    public function showRegister(){

        // $departments = Department::all();

        return view('student.auth.register');
    }


    public function register(Request $request){
        // dd($request);

        $request->validate([
            'email'=>'required|unique:students',
            'password'=>'required|confirmed',
            'tell' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);


        Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'tell' => $request->tell,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('show.login')->with('message', 'Account Created successfully');
    }



    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('show.login');
    }
}
