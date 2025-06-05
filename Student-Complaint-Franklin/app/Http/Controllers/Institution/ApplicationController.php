<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function showApplications(){
        return view('institution.applications');
    }

    public function acceptApplication(Request $request, $id){
        // dd($request);

        $request->validate([
            'message' => 'required',
        ]);

        $application = Application::find($id);

        $application->update([
            'status' => 'selected',
            'message' => $request->message,
        ]);

        return redirect()->route('show.post')->with('message', 'You have Accepted this intern');

    }

    public function declineApplication(Request $request, $id){
        // dd($request);


        $request->validate([
            'message' => 'required',
        ]);

        $application = Application::find($id);

        $application->update([
            'status' => 'declined',
            'message' => $request->message,
        ]);

        return redirect()->route('show.post')->with('error', 'You have Rejected this intern');

    }
}
