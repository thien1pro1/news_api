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

Route::get('/', 'HomeController@index');

Route::get('/bai-viet/{id}', 'BaivietController@show');

//auth

Auth::routes();
Route::get('/home', 'LoginController@index')->name('home');


Route::get('/tim-kiem', 'HomeController@timkiem')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\LoginController::class, 'index'])->name('home');

Route::resource('authorPost', AuthorPostController::class);