<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function showHome()
    {
        $student = Auth::guard('student')->user();
        $posts = Post::all();
        return view('student.home', compact(['student', 'posts']));
    }


}
