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
    return view('welcome2');
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

Route::get('/farmer/sell','FarmerController@getsell');

Route::get('/seller/home','ExecutiveController@home');

Route::get('/farmer/register','FarmerController@getregister');
Route::post('/farmer/register','FarmerController@postregister');

Route::get('/transporter','TransporterController@home');

Route::get('/account_details','FarmerController@getregister');
Route::post('/account_details','FarmerController@postregister');

Route::get('getchildcategories','productCategoryController@getChildCategories');

Route::get('getfarmerdetails','FarmerController@getfarmerdetails');

Route::get('getsellerslist','ProductController@getsellerslist');

Route::get('getsellerprice','ProductController@getsellerprice');
Route::get('getsellersbyquantity','ProductController@getsellersbyquantity');

Route::post('redirecttransport',function(){
    return view('transporter.home2');
});

Route::get('{fruits}/details',function($cat){
    if($cat=='fruits')
        return view('products.fruits.details')->with('cat',2);
    else if($cat=='vegetables')
        return view('products.vegetables.details')->with('cat',1);
})->name('productdetailspage');

