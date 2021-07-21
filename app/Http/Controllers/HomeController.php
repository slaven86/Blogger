<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $all_ads = Ad::where('user_id', Auth::user()->id)->get();
       $all_posts = Auth::user()->posts;

        return view('home', compact('all_posts'));
    }

    public function showPostform(){

        $all_categories = Category::all();

        return view('home.showPostForm', compact('all_categories'));
    }

    public function savePost(Request $request){
        $request->validate([
            'title' => 'required | max:255',
            'body' => 'required',
            'image' => 'mimes: jpg,jpeg,png',
            'category' => 'required'

        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '1.'. $image->extension();
            $image->move(public_path('ad_images'), $image_name);
        }


        Post::create([

            'title' => $request->title,
            'body' => $request->body,
            'image' => (isset($image_name)) ? $image_name : null,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category

        ]);

        return redirect (route('home'));
    }

    public function showSinglePost($id){

        $single_post = Post::find($id);

        return view('home.singlePost', compact('single_post'));
    }

    public function deleteSinglePost($id){

        $single_post = Post::find($id);
        $single_post->delete();

        return redirect()->route('home');
    }

 
}
