<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Models\Admin;
use App\Models\Year;

class CourseController extends Controller
{
    public function showCourses(){

        $courses = Course::with('admin', 'department', 'year')->get();
        $admins = Admin::all();
        $departments = Department::all();
        $years = Year::all();

        return view('admin.course', compact(['admins', 'courses', 'years', 'departments']));
    }

    public function createCourse(Request $request){
        // dd($request);

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:courses',
            'year' => 'required',
            'semester' => 'required'
        ]);

        // dd($request);

        Course::create([
            'code' => $request->code,
            'name' => $request->name,
            'semester' => $request->semester,
            'admin_id' => $request->admin,
            'department_id' => $request->department,
            'year_id' => $request->year,
        ]);


        return redirect()->route('show.course')->with('message', 'Course Added successfully');
    }


    public function updateCourse(Request $request, $id){
        // dd($request);

        $course = Course::find($id);

        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'year' => 'required',
            'semester' => 'required'
        ]);

        $course->update([
            'code' => $request->code,
            'name' => $request->name,
            'semester' => $request->semester,
            'admin_id' => $request->admin,
            'department_id' => $request->department,
            'year_id' => $request->year,
        ]);


        return redirect()->route('show.course')->with('message', 'Course Updated successfully');
    }


    public function deleteCourse($id){

        $course = Course::find($id);
        $course->delete();


        return redirect()->route('show.course')->with('message', 'Course Delete Successfully');
    }

}
