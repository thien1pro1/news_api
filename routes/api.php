<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function(){
    Route::resource('customer', 'Api\v1\CustomerController')->only(['index','show','update','delete','store']);
    
    Route::resource('category', 'Api\v1\CategoryPostController');

  

    Route::resource('post', 'Api\v1\PostController');

     Route::resource('bai-viet', 'Api\v1\BaivietController');
     
     Route::resource('danh-muc', 'Api\v1\DanhmucController');


});





Route::get('/dashboard', [App\Http\Controllers\LoginController::class, 'index'])->name('home');
//Route::resource('customer', 'CustomerController')->except(['edit','create']);


Route::prefix('v2')->group(function(){
    //Route::resource('customer', 'Api\v2\CustomerController')->only(['index','show','update','delete','store']);

    Route::resource('customer', 'Api\v2\CustomerController')->only(['show']);

});