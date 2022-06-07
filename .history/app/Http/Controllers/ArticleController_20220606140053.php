<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ArticleController extends Controller
{
    //buat nampilin article nya 

    public function article(){
        return view('articles',[
            "title" =>"article",
            // "posts" =>Post::all(),
            "post"=>Post::latest()->get()
            'categories'=> Category::all()
        ]);
    }

    //buat nampilin detail article nya

    public function read(Post $post){
        return view('article',[
            "title" =>"article",
            "posts" =>$post
        ]);
    }

}
