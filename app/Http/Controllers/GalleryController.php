<?php

namespace App\Http\Controllers;

use App\Models\GalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show()

    {
        $gallerydata = GalleryModel::all();
         return view('gallery',compact('gallerydata') );
    }
    
}
