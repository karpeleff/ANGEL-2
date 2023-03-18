<?php

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
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');
Route::get('/gallery', [App\Http\Controllers\MainController::class, 'gallery'])->name('gallery');
Route::get('/mastera', [App\Http\Controllers\MainController::class, 'mastera'])->name('mastera');
Route::get('/uslugi', [App\Http\Controllers\MainController::class, 'uslugi'])->name('uslugi');
