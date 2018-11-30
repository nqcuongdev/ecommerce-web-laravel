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
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',['as'=>'dashboard','uses'=>'AdminController@getDashboard']);
});
