<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\FeedbackController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        "title" =>"home",
        "active" => 'home'
    ]);
});
Route::get('/about', 'GalleryController@index');

Route::get('/artikel',[ArticleController::class,'article']);

Route::get('/baca/{post:slug}',[ArticleController::class, 'read']);

Route::resource('/tanya',FeedbackController::class);

Route::get('/contact-us',[ContactUSController::class, 'contactUs']);




Route::get('/authors/{author:username}', function(User $author){
    return view ('authors', [
        'title' =>"Posts By Author: $author->name",
        'posts'=>$author->post->load('category', 'user'),
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view ('category', [
        'title' => "Post By Category: $category->name",
        'posts'=>$category->post->load('category', 'user')
    ]);
});
