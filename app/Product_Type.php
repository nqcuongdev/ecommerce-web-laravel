<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Type extends Model
{
    protected $table = "product_type";

    public function category() {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function products() {
        return $this->hasMany(Products::class, 'id');
    }
    
}
