<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class AdminAboutController extends Controller
{
    public function about()
    {
        $about = AboutModel::all();
        return view('admin.about', compact('about'));
    }
    public function insertabout(Request $request)

    {

        $request->validate([
            'image' => 'required|file|max:20000',
        ]);

        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path().'/storage/aboutImages', $fileName);

        AboutModel::create([
            'image' => $fileName,
            'title' => $request->title,
            'short_about' => $request->short_about,
            'description' => $request->description,
            'ourvision' => $request->ourvision,
            'ourmission' => $request->ourmission,
        ]);

        return redirect()->back()->with('message', 'Data Inserted Successfully');



    }
    public function deleteabout($id)
    {
        $data = AboutModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }




}
