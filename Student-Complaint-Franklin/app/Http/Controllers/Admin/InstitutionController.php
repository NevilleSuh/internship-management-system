<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution;

class InstitutionController extends Controller
{

    public function showInstitution(){

        $institutions = Institution::all();

        return view('admin.institution', compact('institutions'));

    }

    public function addInstitution(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:institutions',
            'password' => 'required|confirmed:password_confirmation',
        ]);

        $institution = Institution::create([
            'name' => $request->name,
            'industry' => $request->industry,
            'location' => $request->location,
            'website' => $request->website,
            'person' => $request->person,
            'email' => $request->email,
            'tell' => $request->tell,
            'password' => $request->password,
            'Description' => $request->description,
            'admin_id' => 1,
        ]);


        if(!$institution){
            return redirect()->back()->with('error', 'An Unknown error occurred while adding Institution');
        }

        return redirect()->back()->with('message', 'Institution Added Successfully');


    }

    public function deleteInstitution($id){
        $institution = Institution::find($id);

        $institution->delete();

        return redirect()->back()->with('message', 'Institution Deleted Successfully');
    }


}
