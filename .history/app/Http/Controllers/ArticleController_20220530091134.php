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

}
