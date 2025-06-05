<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Application;
use App\Models\Category;

class HomeController extends Controller
{
    public function showHome()
    {
        $student = Auth::guard('student')->user();
        $posts = Post::all();
        $categories = Category::all();
        return view('student.home', compact(['student', 'posts', 'categories']));
    }


    public function apply(Request $request, $id){

        // dd($request);

        $student = Auth::guard('student')->user();

        $request->validate([
            'education' => 'required',
            'reason' => 'required',
            'field' => 'required',
        ]);

        if($request->hasFile('cv') && $request->hasFile('letter') && $request->hasFile('id') ){

            $file1 = $request->cv;
            $file2 = $request->letter;
            $file3 = $request->id;


            $name = date('d-m=y-H-m-i');
            $folder = 'files/'. $student->email;


            if(!Storage::disk('public')->exists($folder)){
                Storage::disk('public')->makeDirectory($folder);
            }

            if ($request->hasFile('additional')){
                $file4 = $request->additional;
                $ext4 = $file4->getClientOriginalExtension();

                $path4 = $name. Str::random(10). '.' . $ext4;
                $file4->storeAs($folder, $path4, 'public');


                $additional =  $folder. '/' . $path4;

            }else{
                $additional = null;
            }

            $ext1 = $file1->getClientOriginalExtension();
            $ext2 = $file2->getClientOriginalExtension();
            $ext3 = $file3->getClientOriginalExtension();



            $path1 = $name. Str::random(10). '.' . $ext1;
            $path2 = $name. Str::random(10). '.' . $ext2;
            $path3 = $name. Str::random(10). '.' . $ext3;
            $file1->storeAs($folder, $path1, 'public');
            $file2->storeAs($folder, $path2, 'public');
            $file3->storeAs($folder, $path3, 'public');
        }

        $application = Application::create([
            'education' => $request->education,
            'field' => $request->field,
            'cv' => $folder. '/' . $path1,
            'letter' => $folder. '/' . $path2,
            'id_card' => $folder. '/' . $path3,
            'additional' => $additional,
            'reason' => $request->reason,
            'skill' => $request->skill,
            'student_id' => $student->id,
            'post_id' => $id,
        ]);

        if(!$application){
            return redirect()->back()->with('error', 'An Unknown error occurred while sending application please try again');
        }

        return redirect()->back()->with('message', 'Application Sent Successfully');


    }

    public function search(Request $request){
        // dd($request->all());
        $posts = Post::where('category_id', $request->category)->get();

        return view('student.home', compact('posts'));
    }

}
