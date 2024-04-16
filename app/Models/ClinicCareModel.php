<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicCareModel extends Model
{
    use HasFactory;
    protected $table = 'clinic_care';
    protected $fillable = ['image' , 'short_title' , 'description' , 'title1' , 'title2' , 'title3' , 'title4' , 'title5' , 'title6' , 'title7' , 'title8' , 'title9' ];
}
