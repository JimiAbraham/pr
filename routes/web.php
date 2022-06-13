<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\DM;
use App\Http\Controllers\advert;
use App\Http\Controllers\UserPost;




// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('check','contact');

Route::get('/test', function () {
    return view('post.category');
});

Route::get(
    '/',
    [homeController::class, 'index']
)->name('home');


Route::get(
    '/register',
    [RegisterController::class, 'index']
)->name('register');
Route::post(
    '/register',
    [RegisterController::class, 'store']
);


Route::post(
    '/logout',
    [LogoutController::class, 'store']
)->name('logout');



Route::get(
    '/login',
    [LoginController::class, 'index']
)->name('login');

Route::post(
    '/login',
    [LoginController::class, 'store']
);



// Route::get('/write', function () 
//         {
//                  return view('post.write');
//         })->middleware('auth');


// Route::get(
//     '/write',
//     [PostController::class, 'index']
// )->name('write')->middleware('auth');;

Route::get(
    '/write',
    [PostController::class, 'index']
)->name('write')->middleware('auth');


Route::post(
    '/write',
    [PostController::class, 'store']
)->middleware('auth');



Route::delete(
    '/post/{post}/',
    [homeController::class, 'destroy']
)->middleware('auth')->name('post.destroy');


Route::post(
    '/post/{post}/likes',
    [PostLikeController::class, 'store']
)->name('post.likes')->middleware('auth');;

Route::delete(
    '/post/{post}/likes',
    [PostLikeController::class, 'destroy']
)->name('post.likes');

Route::get(
    '/favourites',
    [PostLikeController::class, 'fav']
)->name('favourites');







Route::get(
    '/post/{post}',
    [PostController::class, 'details']
)->name('post.details');


Route::get(
    '/post/{user:name}/user',
    [UserPost::class, 'index']
)->name('post.user');



Route::get(
    '/dashboard/',
    [DashboardController::class, 'index']
)->name('dashboard')->middleware('auth');

Route::get(
    '/dashboard/setttings',
    [DashboardController::class, 'set']
)->name('dashboard.settings')->middleware('auth');

Route::post(
    '/dashboard/setttings',
    [DashboardController::class, 'store']
)->name('dashboard.settings')->middleware('auth');



// testimony category
Route::get(
    '/testimony.category/{category}',
    [CategoryController::class, 'index']
)->name('testimony.category');


// end testimony category


// google login

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('callback/dashboard', [GoogleController::class, 'handleGoogleCallback'])->name('callback.dashboard');

// google login);



// admin Approval
Route::get('admin/controlRoom', [adminController::class, 'index'])->name('admin.controlRoom');
Route::get('admin/approve/{id}', [adminController::class, 'approve'])->name('admin.approve');



// DM messages

Route::get('message', [DM::class, 'index'])->name('message');


//advert

Route::get('billboard', [advert::class, 'index'])->name('billboard');
