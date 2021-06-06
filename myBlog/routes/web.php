<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Models\Post;

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
    $last_post = Post::latest()->first();
    $posts = Post::latest()->take(4)->get();
    return view('welcome', [
      'posts' => $posts,
      'last_post' => $last_post
    ]);
})->name('welcome');

Route::get('/change-language/{locale}', [LocaleController::class, 'switch'])->name('switchLang');

Route::group(['middleware' => 'web'], function () {
  Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
  Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
  Route::get('/blog/post/create', [PostController::class, 'create'])->name('posts.create');
  Route::post('/blog/post/store', [PostController::class, 'store'])->name('posts.store');
  Route::get('/blog/post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
  Route::put('/blog/post/{post}/update', [PostController::class, 'update'])->name('posts.update');
  Route::delete('/blog/post/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/admin/zoro/signIn', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/admin/zoro/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
