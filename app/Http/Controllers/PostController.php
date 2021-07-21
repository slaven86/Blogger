<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        if(isset(request()->cat)){

            $all_posts = Post::whereHas('category', function ($query){
                $query->where('name', request()->cat);
            
        })->get();

     }
      else{
            $all_posts = Post::all();
        }

        
        $all_categories = Category::all();

        return view('welcome', compact('all_posts', 'all_categories'));
    }

    public function show($id){

        $single_post = Post::find($id);

       
        return view('singlePost',compact('single_post'));
    }
}
