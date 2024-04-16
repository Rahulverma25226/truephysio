<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\ClinicCareModel;
use App\Models\GalleryModel;
use App\Models\ServicesModel;
use App\Models\FaqModel;
use App\Models\ReviewModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = ServicesModel::all();
        $aboutdata = AboutModel::all();
        $faq = FaqModel::all();
        $clinic_care = ClinicCareModel::all();
        $review = ReviewModel::all();
        return view('index', compact('data', 'aboutdata', 'faq', 'clinic_care', 'review'));
    }
    public function more($id)
    {
        $data = ServicesModel::findOrFail($id);
        return view('more_services', compact('data'));
    }
}
