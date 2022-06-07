<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ArticleController extends Controller
{
    //buat nampilin article nya 

    public function article(){
        return view('articles',[
            "title" =>"article",
            "posts" =>Post::all()
        ]);
    }

    //buat nampilin detail article nya

    public function read($slug){
        return view('article',[
            "title" =>"article",
            "posts" =>Post::find($slug)
        ]);
    }

}
