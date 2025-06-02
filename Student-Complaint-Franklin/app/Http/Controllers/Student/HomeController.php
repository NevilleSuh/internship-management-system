<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Complaint;

class HomeController extends Controller
{
    public function showHome()
    {
        $student = Auth::guard('student')->user();
        return view('student.home', compact(['student']));
    }


}
