<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function showProfile(){
        $student = Auth::guard('student')->user();
        return view('student.profile', compact('student'));
    }
}
