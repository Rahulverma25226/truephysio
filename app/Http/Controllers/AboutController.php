<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\TeamModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()

    {
        $aboutdata = AboutModel::all();
        $teamdata =TeamModel::all();
        return view('about_us', compact('aboutdata','teamdata'));
    }
}
