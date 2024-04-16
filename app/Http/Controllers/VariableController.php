<?php

namespace App\Http\Controllers;

use App\Models\VariableModel;
use Illuminate\Http\Request;

class VariableController extends Controller
{
    public function variable()
    {
        $data = VariableModel::first();
        return $data;
    }
}
