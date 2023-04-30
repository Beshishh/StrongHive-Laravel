<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog_deatils', function () {
    return view('blog_details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/elements', function () {
    return view('elements');
});


Route::get('/from', function () {
    return view('from');
});


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/schedule', function () {
    return view('schedule');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/newslist', [NewsController::class,'index']);

Route::get('/newslist', [NewsController::class,'search']);


Route::get('/detailnews/{news}', [NewsController::class, 'show']);

Route::get('/addnews', [NewsController::class,'create']);
Route::post('/addnews', [NewsController::class,'store']);

Route::get('/editnews/{news}', [NewsController::class,'edit']);
Route::post('/editnews/{news}', [NewsController::class,'update']);

Route::delete('/newslist/{news}', [NewsController::class,'destroy']);



