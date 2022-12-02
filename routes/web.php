<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::resource('/dashboard',PostController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/dashboard',CommentController::class);
Route::resource('/account',AccountController::class);
// Route::get('/client',PageController::class, 'index')->name('cc');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
