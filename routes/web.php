<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{name?}', [ProfileController::class, 'show']);

Route::get('/post-list',[PostController::class,'postList'])->name('post.list');
Route::post('/like-post/{id}',[PostController::class,'likePost'])->name('like.post');
Route::post('/unlike-post/{id}',[PostController::class,'unlikePost'])->name('unlike.post');

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
