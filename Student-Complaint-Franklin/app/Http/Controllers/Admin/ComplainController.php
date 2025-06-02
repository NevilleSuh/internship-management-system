<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Complaint;

class ComplainController extends Controller
{

    public function showCaComplain(){
        $admin = Auth::guard('admin')->user();
        $courses = $admin->courses;

        return view('admin.complains.ca-complaint', compact('courses'));
    }

    public function showExamComplain(){

        $complaints = Complaint::where('category', 'exam')->get();
        $admin = Auth::guard('admin')->user();

        $id = $admin->department->id;


        return view('admin.complains.exams-complaint', compact('complaints', 'id'));
    }

    public function showOtherComplain(){

        $complaints = Complaint::where('category', 'other')->get();

        $admin = Auth::guard('admin')->user();

        $id = $admin->department->id;
        return view('admin.complains.other-complaint', compact('complaints', 'id'));
    }

    public function resolveComplain($id){
        $complaint = Complaint::find($id);

        $complaint->update([
            'status' => 'resolved',
            'comment' => '',
        ]);

        return redirect()->back()->with('message', 'Complain Resolved Successfully');
    }


    public function declineComplain(Request $request, $id){
        $complaint = Complaint::find($id);

        $complaint->update([
            'status' => 'declined',
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('message', 'Complain Declined Successfully');

    }
}
