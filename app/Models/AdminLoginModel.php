<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminLoginModel extends Authenticatable
{
    
    use Notifiable;
    protected $table = "admin";
    protected $fillable = ['email' , 'password'];
}
