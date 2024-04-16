<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class AdminAddServiceController extends Controller
{
    public function addService()
    {
        return view('admin.add_service');
    }
    public function insertservice(Request $request)

    {

        $request->validate([
            'thumb' => 'required|file|max:20000',
            'image' => 'required|file|max:20000',
        ]);

        $thumb = $request->file('thumb');
        $thumbName = $thumb->getClientOriginalName();
        $thumb->move(public_path().'/storage/serviceImages/thumbImage', $thumbName);

        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path().'/storage/serviceImages', $fileName);

        ServicesModel::create([
            'image' => $fileName,
            'thumb' => $thumbName,
            'title' => $request->title,
            'short_about' => $request->short_about,
            'description' => $request->description
        ]);

        return redirect()->back()->with('message', 'Data Inserted Successfully');



    }
    public function deleteservice($id)
    {
        $data = ServicesModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
