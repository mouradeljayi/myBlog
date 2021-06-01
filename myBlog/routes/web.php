<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LocaleController;

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
})->name('welcome');

Route::get('/change-language/{locale}', [LocaleController::class, 'switch'])->name('switchLang');

Route::middleware(['localized'])->prefix(app()->getLocale())->group(function () {
  Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});
