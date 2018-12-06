<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;
use App\Product_Type;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $cart = Cart::content();
            $view->with(['cart'=>$cart]);
        });
        view()->composer('header',function($view){
            $category = Category::all();
            $view->with(['category'=>$category]);
        });
        view()->composer('header',function($view){
            $menu = Product_Type::join('category','product_type.id_category','=','category.id')->get();
            $view->with(['menu'=>$menu]);  
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
