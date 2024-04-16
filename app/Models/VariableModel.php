<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariableModel extends Model
{
    use HasFactory;
    protected $table = 'variables';
    protected $fillable = [
        'comp_name',
        'comp_phone',
        'comp_email1',
        'comp_email2',
        'comp_branch1',
        'comp_branch2',
        'comp_branch3',
        'comp_branch4',
        'comp_branch5',
        'comp_branch6',
        'comp_branch7',
    ];
}
