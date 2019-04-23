<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $fillable =  ['name_category','status'];

    public function productType() {
        return $this->hasMany(Product_Type::class, 'id');
    }
}
