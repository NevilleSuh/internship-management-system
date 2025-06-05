<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function showPost(){

        $categories = Category::all();
        $posts = Post::latest()->get();

        return view('institution.post', compact(['posts', 'categories']));
    }

    public function post(Request $request){
        // dd($request);

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'type' => 'required',
            'compensation' => 'required',
            'category' => 'required',
            'number' => 'required',
            'start' => 'required',
            'deadline' => 'required',
            'type' => 'required',
            'i' => 'required',
            'j' => 'required',
            'person' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $duration = $request->i.' '.$request->j;

        $post = Post::create([
            'title' => $request->title,
            'location' => $request->location,
            'type' => $request->type,
            'compensation' => $request->compensation,
            'category_id' => $request->category,
            'number' => $request->number,
            'start' => $request->start,
            'duration' => $duration,
            'deadline' => $request->deadline,
            'person' => $request->person,
            'email' => $request->email,
            'phone' => $request->phone,
            'descriptions' => $request->descriptions,
            'responsibilities' => $request->responsibilities,
            'benefits' => $request->benefits,
            'skills' => $request->skills,
            'requirements' => $request->requirements,
            'instruction' => $request->instruction,
            'institution_id' => Auth::guard('institution')->user()->id,


        ]);

        return redirect()->back()->with('message', 'Internship Added Successfully');
    }


    public function deletePost($id){

        $post = Post::find($id);
        $post->delete();


        return redirect()->route('show.post')->with('message', 'Post Delete Successfully');
    }
}
