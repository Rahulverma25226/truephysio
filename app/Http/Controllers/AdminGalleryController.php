<?php

namespace App\Http\Controllers;

use App\Models\GalleryModel;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function gallery()
    {
        $gallery = GalleryModel::all();
        return view('admin.gallery', compact('gallery'));
    }
    public function insertgallery(Request $request)
    {
        $request->validate([

            'image' => 'required|file|max:100000'

        ]);

        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path().'/storage/GalleryImages', $fileName);

        GalleryModel::create([
            'image' => $fileName,
        ]);

        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }
    public function deletegallery($id)
    {
        $data = GalleryModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
