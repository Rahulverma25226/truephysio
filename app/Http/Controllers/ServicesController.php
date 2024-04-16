<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show()

    {
        $data = ServicesModel::all();
         return view('services',compact('data') );
    }
    public function more($id){
        $data =ServicesModel::find($id);
        return view('more_services',compact('data') );
    }
}
