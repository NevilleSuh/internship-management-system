<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showStudent(){

        $students = Student::all();
        return view('admin.students', compact('students'));

    }
}
