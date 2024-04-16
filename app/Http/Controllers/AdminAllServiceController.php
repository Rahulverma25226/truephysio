<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class AdminAllServiceController extends Controller
{
    public function allservice()
    {
        $allservice = ServicesModel::all();
        return view('admin.all_service', compact('allservice'));
    }

    public function deleteservice($id)
    {
        $data = ServicesModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }

}
