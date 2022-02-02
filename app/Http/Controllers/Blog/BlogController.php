<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Files;

class BlogController extends Controller
{
    public function index()
    {  $blogs= \App\Models\blogs::all();
        $categories=\App\Models\category::all();
        $files=\App\Models\Files::all();


     return view('dashboard.blog.blog',compact('blogs','categories', 'files'));
    }
    
    public function createblog(Request $request)
    {
        //$imageName = time().'.'.$request->image->extension(); 
        
        //$request->image->move(public_path('images'), $imageName); 

       \App\Models\blogs::create([
        'user_id'=>auth()->user()->id,
        'tittle'=>$request->get('tittle'),
        'Status'=>1,
        'Author'=>auth()->user()->firstName,
        'contents'=>$request->get('contents'),
        //'image'=>$imageName,
        'description'=>$request->get('description'), 
        'views'=>0,
        'category_id'=>$request->get('category_id'),

      ]);

        return back();
    }

    public function files(Request $request)
    {
        $validated = $request->validate([
        'file' => 'required|mimes:jpg,png',
            ]); 

        //getting file extension
        $extension= $request->file->extension();
         //getting file zise
        $size= $request->file->getClientSize();
         //getting orginal file name
        $Oname=$request->file->getClientOriginalName();
         //geting blog id
        $blog_id=$request->blog_id;
         //creating new file name with timestamp
        $Nname=time().'.'.$extension;

        //it uploads uploaded file to public folder
        $request->file->move(public_path('files'), $Nname);

        //inserting data in table files 

        $files=Files::create([
            'blog_id'=>$blog_id,
            'original_filename'=>$Oname,
            'new_filename'=>$Nname,
            'extension'=>$extension,
            'size'=>$size,
        ]);

        if ($files) {
            return back()->with('success', 'Files saved');
        }
            return back()->with('danger', 'File not saved');



    }



}
