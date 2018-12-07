<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'status'
    ];
}
