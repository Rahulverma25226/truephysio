<?php

namespace App\Http\Controllers;

use App\Models\CarrierOptionModel;
use Illuminate\Http\Request;

class AdminCarrierOptionController extends Controller
{
    public function carrieroption()

    {
        $carrieroption=CarrierOptionModel::all();
        return view ('admin.carrier_option', compact('carrieroption'));
    }

    public function deletecarrier($id)
    {
        $data = CarrierOptionModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
