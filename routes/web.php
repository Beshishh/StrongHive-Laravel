<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;

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

Route::get('/blog_details', function () {
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



Route::get('/gallerylist', [GalleryController::class,'index']);

Route::get('/gallerylist', [GalleryController::class,'search']);


Route::get('/detailgallery/{gallery}', [GalleryController::class, 'show']);

Route::get('/addgallery', [GalleryController::class,'create']);
Route::post('/addgallery', [GalleryController::class,'store']);

Route::get('/editgallery/{gallery}', [GalleryController::class,'edit']);
Route::post('/editgallery/{gallery}', [GalleryController::class,'update']);

Route::delete('/gallerylist/{gallery}', [GalleryController::class,'destroy']);



Route::get('/coachlist', [CoachController::class,'index']);

Route::get('/coachlist', [CoachController::class,'search']);


Route::get('/detailcoach/{coach}', [CoachController::class, 'show']);

Route::get('/addcoach', [CoachController::class,'create']);
Route::post('/addcoach', [CoachController::class,'store']);

Route::get('/editcoach/{coach}', [CoachController::class,'edit']);
Route::post('/editcoach/{coach}', [CoachController::class,'update']);

Route::delete('/coachlist/{coach}', [CoachController::class,'destroy']);

