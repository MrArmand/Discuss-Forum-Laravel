<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Container;
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

app()->singleton('App\Http\Container', function ($app){
    return new Container("key");
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){

Route::get('/secret', [ProfileController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/post/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/dashboard',[PostController::class, 'store'])->name('posts.store');
Route::delete('/post/destroy',[PostController::class, 'destroy'])->name('posts.destroy');
Route::patch('/post/edited/{id?}', [PostController::class, 'update']);


Route::post('/comments/add',[CommentController::class, 'store'])->name('comments.store');
Route::delete('/comment/destroy', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::get('/comment/edit/{id?}', [CommentController::class, 'edit']);
Route::patch('/update/comment/{id?}', [CommentController::class, 'update']);

Route::delete('/post/pins/destroy', [PostController::class, 'pinDestroy'])->name('pins.destroy');;

Route::get('/post/pinned/{id?}', [PostController::class, 'pin']);
Route::get('/post/edit/{id?}', [PostController::class, 'edit']);
Route::get('user/{name?}', [ProfileController::class, 'show']);
});
require __DIR__.'/auth.php';

Auth::routes();


