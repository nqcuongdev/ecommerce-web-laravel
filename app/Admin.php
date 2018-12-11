<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table ='admin_user';
    
    protected $guard ='admins';

    protected $fillable = [
        'name', 'email', 'password','group_id','status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
