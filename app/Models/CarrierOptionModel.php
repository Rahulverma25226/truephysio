<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierOptionModel extends Model
{
    use HasFactory;
    protected $table = 'carrieroption';
    protected $fillable = ['name', 'phone', 'email', 'resume'];
}
