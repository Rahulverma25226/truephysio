<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    use HasFactory;
    protected $table = "appointment";
    protected $fillable = ['name' , 'phone' , 'email' , 'service_name' , 'date'];
}
