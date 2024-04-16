<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable= ['image', 'title', 'short_about', 'description' , 'ourmission' , 'ourvision'];
}
