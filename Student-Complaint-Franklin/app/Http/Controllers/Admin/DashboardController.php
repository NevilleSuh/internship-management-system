<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Student;
use App\Models\Post;
use App\Models\Application;

class DashboardController extends Controller
{
    public function showDashboard(){
        $institution = Institution::count();
        $student = Student::count();
        $post = Post::count();
        $application = Application::count();
        $pending = Application::where('status', 'pending')->count();

        return view('admin.dashboard', compact(['institution', 'student', 'post', 'application', 'pending']));
    }
}
