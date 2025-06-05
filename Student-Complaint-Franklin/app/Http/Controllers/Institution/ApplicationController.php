<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function showApplications(){
        return view('institution.applications');
    }

    public function acceptApplication(){}

    public function declineApplication(){}
}
