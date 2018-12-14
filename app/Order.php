<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'oder';
    protected $fillable = ['qty','sub_total','total','note'];
}
