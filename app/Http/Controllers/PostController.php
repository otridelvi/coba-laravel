<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
        "title" => "All Post",
        // "posts" => Post::all(),
        "posts" => Post::latest()->get()

    ]);
    }
    
    public function showSingleData(Post $post)
    {
        return view('post',
    [   
        "title" => "Single Post",
        "post" => $post
    ]);
    }
}
