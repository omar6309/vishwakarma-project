<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vegetables',function(){
    return view('products.vegetables');
});
Route::get('/fruits',function(){
    return view('products.fruits');
});
Route::get('/grains',function(){
    return view('products.grains');
});

Route::get('/seller/home','ExecutiveController@home');