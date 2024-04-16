<?php

namespace App\Http\Controllers;

use App\Models\ClinicCareModel;
use Illuminate\Http\Request;

class AdminClinicCareController extends Controller
{
    public function cliniccare()
    {
        $cliniccare = ClinicCareModel::all();
        return view('admin.Clinic_care', compact('cliniccare'));
    }
    public function insertCliniccare(Request $request)

    {

        $request->validate([
            'image' => 'required|file|max:20000',
        ]);

        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path() . '/storage/ClinicCareImages', $fileName);

        ClinicCareModel::create([
            'image' => $fileName,
            'short_title' => $request->short_title,
            'description' => $request->description,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'title4' => $request->title4,
            'title5' => $request->title5,
            'title6' => $request->title6,
            'title7' => $request->title7,
            'title8' => $request->title8,
            'title9' => $request->title9,
        ]);

        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }
    public function deletecliniccare($id)
    {
        $data = ClinicCareModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
