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

        $departments = Department::all();

        return view('student.auth.register', compact('departments'));
    }


    public function register(Request $request){
        // dd($request);

        $request->validate([
            'matricule'=>'required|unique:students',
            'password'=>'required|confirmed',
            'department' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);


        Student::create([
            'first_name' => strtoupper($request->first_name),
            'last_name' => strtoupper($request->last_name),
            'matricule' => strtoupper($request->matricule),
            'password' => Hash::make($request->password),
            'department_id' => $request->department,
        ]);


        return redirect()->route('show.login')->with('message', 'Account Created successfully');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('show.login');
    }
}
