<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Department;
use App\Models\Course;
use App\Models\Complaint;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\File;

class ComplainController extends Controller
{
    public function showComplain()
    {
        $years = Year::all();
        $departments = Department::all();
        return view('student.complain', compact(['years', 'departments']));
    }

    public function filterCourses(Request $request)
    {
        $courses = Course::where('year_id', $request->year)
            ->where('semester', $request->semester)
            ->where('department_id', $request->department)
            ->get();

        return response()->json($courses);
    }

    public function createComplain(Request $request){
        // dd($request);

        $request->validate([
            'academic_year'=>'required',
            'department' => 'required',
            'category' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'documents.*' => 'file|mimes:jpg,docx,jpeg,png,pdf|max:2048'
        ]);


        $complaint = Complaint::create([
            'subject' => $request->subject,
            'academic_year' => $request->academic_year,
            'description' => $request->description,
            'category' => $request->category,
            'course_id' => $request->course,
            'student_id' => Auth::guard('student')->id(),
        ]);

        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {

                $name = date('d-m-y-H-m-i');

                $folder = 'complaints';
                $extension = $file->getClientOriginalExtension();

                if(!Storage::disk('public')->exists($folder)){
                    Storage::disk('public')->makeDirectory($folder);
                }
                // Store the file and get the path
                $path = $name. Str::random(10). '.' . $extension;
                $file->storeAs($folder, $path, 'public');
                // Store the file path in the database (assuming you have a File model and files table)
                File::create([
                    'complaint_id' => $complaint->id,
                    'path' =>'complaints/' . $path,
                    'ext' =>  $extension,
                ]);
            }
        }

        return redirect()->back()->with('message', 'Complain Submitted Successfully');
    }
}
