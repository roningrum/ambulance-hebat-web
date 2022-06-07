<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" =>"home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" =>"about"
    ]);
});

Route::get('/tanya', function () {
    return view('tanya',[
        "title" =>"tanya"
    ]);
});

Route::get('/article', function () {
    return view('article',[
        "title" =>"article",
        "posts" =>Post::all()
    ]);
});

Route::get('/article/{slug}', function($slug){
    return view('readArticle', [
        "title" => "Read Article",
        "posts" => Post::find($slug)
    ]);
});

Route::get('/ask', function () {
    return view('tanya',[
        "title" =>"tanya"
    ]);
});

Route::get('/contact-us', function () {
    return view('contact-us',[
        "title" =>"contact"
    ]);
});
