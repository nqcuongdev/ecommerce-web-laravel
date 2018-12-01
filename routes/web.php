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

Route::get('/',['as'=>'index','uses'=>'ShopController@getIndex']);
Route::get('products',['as'=>'products','uses'=>'ShopController@getProducts']);
Route::get('product-details/{id}',['as'=>'product-details','uses'=>'ShopController@getProductDetails']);
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',['as'=>'dashboard','uses'=>'AdminController@getDashboard']);
    Route::get('products',['as'=>'admin.getproducts','uses'=>'AdminController@getProducts']);
    Route::post('products',['as'=>'admin.postproducts','uses'=>'AdminController@postProducts']);
});
