<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function showPost(){

        $categories = Category::all();

        return view('institution.post', compact('categories'));
    }
}
