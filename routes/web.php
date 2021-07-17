<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ DevContoller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;



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


Route::any('/', [DevContoller::class, 'landingPage'])->name('homepage');
//member session
Route::any('/signup', [ DevContoller::class, 'signup'])->name('signup');
Route::any('/userlogin',[DevContoller::class, 'userlogin'])->name('loginprofile');
Route::any('/profile',[DevContoller::class, 'profilepage'])->middleware('devauth');
Route::any('edit/{id}',[DevContoller::class, 'edit'])->middleware('devauth')->name('edit');
Route::any('edit/update/{id}',[DevContoller::class, 'update'])->middleware('devauth')->name('edit');
  //logout
  Route::any('/memberlogout',[MemberController::class, 'MemberLogout'])->name('logout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/cat', [CategoryController::class, 'index']);
Route::get('/show/{id}', [PostController::class, 'show']);
Route::any('show/disc/{id}', [PostController::class, 'discussme']);
// Route::any('/p', [PostController::class, 'p']);
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::post('/post', [PostController::class, 'post']);
