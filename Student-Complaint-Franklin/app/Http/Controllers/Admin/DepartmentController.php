<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Auth;

class DepartmentController extends Controller
{
    public function showDepartments(){

        $departments = Department::all();

        return view('admin.department', compact('departments'));
    }

    public function createDepartment(Request $request){
        // dd($request);

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:departments',
        ]);

        Department::create([
            'code' => $request->code,
            'name' => $request->name,
            'admin_id' => Auth::guard('admin')->id(),
        ]);


        return redirect()->route('show.department')->with('message', 'Department Added successfully');
    }

    public function updateDepartment(Request $request, $id){
        // dd($request);

        $department = Department::find($id);

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:departments',
        ]);

        $department->update([
            'code' => $request->code,
            'name' => $request->name,
            'admin_id' => Auth::guard('admin')->id(),
        ]);


        return redirect()->route('show.department')->with('message', 'Department Updated successfully');
    }


    public function deleteDepartment($id){

        $department = Department::find($id);
        $department->delete();


        return redirect()->route('show.department')->with('message', 'Department Delete Successfully');
    }
}
