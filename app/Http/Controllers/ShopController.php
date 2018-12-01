<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }

    public function getProducts()
    {
        return view('shop.products');
    }
}
