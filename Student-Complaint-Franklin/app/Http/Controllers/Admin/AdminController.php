<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;

class AdminController extends Controller
{
    public function showAdmins(){

        $admins = Admin::all();

        return view('admin.admin', compact('admins'));
    }

    public function createAdmin(Request $request){
        // dd($request);

        $request->validate([
            'matricule' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'role' => 'required',
            'phone' => 'integer',
            'password'=>'required|confirmed',
        ]);


        Admin::create([
            'matricule' => strtoupper($request->matricule),
            'first_name' => strtoupper($request->first_name),
            'last_name' => strtoupper($request->last_name),
            'role' => $request->role,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('show.admin')->with('message', 'Admin Added successfully');
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


    public function deleteAdmin($id){

        $admin = Admin::find($id);
        $admin->delete();


        return redirect()->route('show.admin')->with('message', 'Department Delete Successfully');
    }
}
