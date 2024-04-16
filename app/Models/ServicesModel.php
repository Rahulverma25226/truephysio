<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable=['title', 'thumb', 'image', 'short_about', 'description'];
}
