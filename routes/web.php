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

Route::get('abouts',['as'=>'abouts','uses'=>'ShopController@getAbouts']);

Route::get('contact',['as'=>'contact','uses'=>'ShopController@getContact']);

Route::get('add-to-cart/{id}',['as'=>'addtocart','uses'=>'ShopController@addtocart']);
Route::get('cart',['as'=>'yourcart','uses'=>'ShopController@getCart']);
Route::get('remove-item/{id}',['as'=>'removeitem','uses'=>'ShopController@removeCart']);
Route::get('update/{id}/{qty}',['as'=>'updateitem','uses'=>'ShopController@updateCart']);

Route::get('delivery-method',['as'=>'getdeliverymethod','uses'=>'ShopController@getDelivery']);

Route::get('confirmation',['as'=>'confirm','uses'=>'ShopController@getConfirm']);

Route::get('login',['as'=>'get.login','uses'=>'ShopController@getLogin']);
Route::post('login',['as'=>'post.login','uses'=>'ShopController@postLogin']);
Route::get('logout',['as'=>'get.logout','uses'=>'ShopController@postLogout']);
Route::post('register',['as'=>'post.register','uses'=>'ShopController@postRegister']);

Route::group(['prefix'=>'admin'],function(){

    Route::get('dashboard',['as'=>'dashboard','uses'=>'AdminController@getDashboard']);

    Route::get('slides',['as'=>'getslides','uses'=>'AdminController@getSlides']);
    Route::post('slides',['as'=>'postslides','uses'=>'AdminController@postSlides']);

    Route::get('products',['as'=>'admin.getproducts','uses'=>'AdminController@getProducts']);
    Route::post('products',['as'=>'admin.postproducts','uses'=>'AdminController@postProducts']);

    Route::get('category',['as'=>'getcategory','uses'=>'AdminController@getCategory']);
    Route::post('category',['as'=>'postcategory','uses'=>'AdminController@postCategory']);
    Route::post('ajax-editcategory',['as'=>'editcategory','uses'=>'AdminController@postEditCategory']);
    Route::get('disable-category/{id}',['as'=>'disablecategory','uses'=>'AdminController@getDisableCategory']);
    Route::get('active-category/{id}',['as'=>'activecategory','uses'=>'AdminController@getActiveCategory']);

    Route::post('type',['as'=>'posttype','uses'=>'AdminController@postType']);	
});
