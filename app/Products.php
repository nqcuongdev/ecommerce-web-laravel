<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table="products";

    public function productType() {
        return $this->belongsTo(Product_Type::class, 'products_type');
    }
}
