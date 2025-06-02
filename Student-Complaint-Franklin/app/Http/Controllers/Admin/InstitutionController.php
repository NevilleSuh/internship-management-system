<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institutions;

class InstitutionController extends Controller
{
    public function showInstitution(){
        return view('admin.institution');
    }

    public function AddInstitution(Request $request){
        dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:institutions',
            'password' => 'required|confirm:password_confirmation',
        ]);

    }
}
