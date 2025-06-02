<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Admin;
use App\Models\Complaint;
use Session;
use Auth;

class DashboardController extends Controller
{
    public function showDashboard(){
        $student = Student::count();
        $admin = Admin::count();
        $pending = Complaint::where('status', 'pending')->count();
        $resolved = Complaint::where('status', 'resolved')->count();
        $rejected = Complaint::where('status', 'declined')->count();

        return view('admin.dashboard', compact(['student', 'admin', 'pending', 'resolved', 'rejected']));
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('show.login');
    }
}
