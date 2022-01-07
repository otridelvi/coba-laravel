<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
{
    function index (Category $category){
    return view('posts',[
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category','author'),
        'category' => $category->name

    ]);
    }
    function listCategories()
    {
        return view('home',[
            'title' => "Categories",
            'categories' => Category::all()
            
        ]);
    }
}