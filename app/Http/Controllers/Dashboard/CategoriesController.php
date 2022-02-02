<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoriesController extends Controller
{
    function index()
    {
        $categories =   \App\Models\Category::orderBy('id')->get();
        return view('dashboard.category.index',[
            'categories'=>$categories
        ]);
    }

    public function createcategory(Request $request)
    {
        $categories = new category();
        $categories->name= $request->name;
        $categories->save();
        return back(); //->with('Category_created','Post has been created successfully!');
    }

    public function deletecategory($id)
    {
        category::where('id',$id)->delete();
        return back();
    }
}
