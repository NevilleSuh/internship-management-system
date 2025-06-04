<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function showCategory(){

        $categories = Category::all();

        return view('admin.category', compact('categories'));

    }

    public function addCategory(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::create([
            'name' => $request->name,
        ]);


        if(!$category){
            return redirect()->back()->with('error', 'An Unknown error occurred while adding Institution');
        }

        return redirect()->back()->with('message', 'Category Added Successfully');


    }

    public function deleteCategory($id){
        $category = Category::find($id);

        $category->delete();

        return redirect()->back()->with('message', 'Institution Deleted Successfully');
    }

}
