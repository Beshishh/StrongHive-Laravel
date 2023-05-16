<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AuthController;
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


Route::get('/start', function () {
    return view('start');
});


Route::get('/register', [UserController::class,'form_register'])->name('reqisterresult');
Route::post('/register', [UserController::class,'store_register']);

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', [Controller::class,'dashboard'])->name('dashboard');

    Route::middleware('manager')->group(function () {

        Route::get('/newslist', [NewsController::class,'index']);
        Route::get('/newslist', [NewsController::class,'search']);
        Route::get('/detailnews/{news}', [NewsController::class, 'show']);
        Route::get('/addnews', [NewsController::class,'create']);
        Route::post('/addnews', [NewsController::class,'store']);
        Route::get('/editnews/{news}', [NewsController::class,'edit']);
        Route::post('/editnews/{news}', [NewsController::class,'update']);
        Route::delete('/newslist/{news}', [NewsController::class,'destroy']);

        Route::get('/scheduletable', [ScheduleController::class,'index']);
        Route::get('/editschedule/{schedule}', [ScheduleController::class,'edit']);
        Route::post('/editschedule/{schedule}', [ScheduleController::class,'update']);


        Route::get('/gallerylist', [GalleryController::class,'index']);
        Route::get('/gallerylist', [GalleryController::class,'search']);
        Route::get('/detailgallery/{gallery}', [GalleryController::class, 'show']);
        Route::get('/addgallery', [GalleryController::class,'create']);
        Route::post('/addgallery', [GalleryController::class,'store']);
        Route::get('/editgallery/{gallery}', [GalleryController::class,'edit']);
        Route::post('/editgallery/{gallery}', [GalleryController::class,'update']);
        Route::delete('/gallerylist/{gallery}', [GalleryController::class,'destroy']);

        Route::get('/orders', [OrdersController::class,'index']);
        Route::get('/orders', [OrdersController::class,'search']);
        Route::get('/detailorder/{orders}', [OrdersController::class, 'show']);
        Route::get('/addorder', [OrdersController::class,'create']);
        Route::post('/addorder', [OrdersController::class,'store']);
        Route::delete('/orders/{orders}', [OrdersController::class,'destroy']);

    }); // end Route::middleware('manager')->group(function () {

        Route::middleware('admin')->group(function () {
            Route::get('/coachlist', [CoachController::class,'index']);
            Route::get('/coachlist', [CoachController::class,'search']);
            Route::get('/detailcoach/{coach}', [CoachController::class, 'show']);
            Route::get('/addcoach', [CoachController::class,'create']);
            Route::post('/addcoach', [CoachController::class,'store']);
            Route::get('/editcoach/{coach}', [CoachController::class,'edit']);
            Route::post('/editcoach/{coach}', [CoachController::class,'update']);
            Route::delete('/coachlist/{coach}', [CoachController::class,'destroy']);



            Route::get('/subscriptionslist', [SubscriptionsController::class,'index']);
            Route::get('/addsubcription', [SubscriptionsController::class,'create']);
            Route::post('/addsubcription', [SubscriptionsController::class,'store']);
            Route::get('/editsubscription/{subscriptions}', [SubscriptionsController::class,'edit']);
            Route::post('/editsubscription/{subscriptions}', [SubscriptionsController::class,'update']);
            Route::delete('/subscriptionslist/{subscriptions}', [SubscriptionsController::class,'destroy']);

            Route::get('/userslist', [UserController::class,'index']);
            Route::get('/userslist', [UserController::class,'search']);
            Route::get('/adduser', [UserController::class,'create']);
            Route::post('/adduser', [UserController::class,'store']);
            Route::delete('/userslist/{users}', [UserController::class,'destroy']);

        }); // end Route::middleware('admin')->group(function () {

            Route::get('/profile/{users}', [UserController::class,'profile_edit']);
            Route::post('/profile/{users}', [UserController::class,'profile_update']);
            Route::get('/edituser/{users}', [UserController::class,'edit']);
            Route::post('/edituser/{users}', [UserController::class,'update']);
            Route::get('/createorder/{subscriptions}', [SubscriptionsController::class,'orderscreate'])->name('createorder');
            Route::post('/createorder/{subscriptions}', [SubscriptionsController::class,'orderstore']);
            Route::get('/profile', function () {
                return view('profile');
            });
            Route::get('/profile', [OrdersController::class,'profileSub']);

            Route::get("/payment-success", [SubscriptionsController::class, "successPayment"])->name("success-payment");
        });    // Route::group(['middleware' => ['auth']], function (){

Route::get('/', [Controller::class,'IndexController']);


Route::get('/services', [SubscriptionsController::class,'pricelist'])->name('services');

Route::get('/blog', [Controller::class,'newsList']);

Route::get('/blog_details/{news}', [Controller::class,'showNews']);


Route::get('/contact', [Controller::class,'contacts']);


Route::get('/elements', function () {
    return view('elements');
});


Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/gallery', [GalleryController::class,'galleryList']);



Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

