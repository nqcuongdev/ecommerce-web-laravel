<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blog';

    protected $fillable = [
    	'title',
    	'content',
    	'image',
    ];
}
