<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\ContactUSController;
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

Route::get('/tanya',[AskController::class, 'article']);

Route::get('/artikel',[ArticleController::class,'article']);

Route::get('/baca/{slug}',[ArticleController::class, 'read']);

Route::get('/ask',[AskController::class,'ask']);

Route::get('/contact-us',[ContactUSController::class, 'contactUs']);
