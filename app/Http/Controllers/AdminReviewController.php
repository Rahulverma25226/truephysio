<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{


    public function insertreviewdata(Request $request)
    {

        // $request->validate([
        //     'image' => 'required|file',
        // ]);

        // $image = $request->file('image');
        // $fileName = $image->getClientOriginalName();
        // $image->move(public_path() . '/storage/reviewImage', $fileName);

        $review = new ReviewModel();
        $review->name = $request->pname;
        $review->description = $request->description;
        // $review->image =$fileName;
        $review->save();

        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }
    public function deletereview($id)
    {
        $data = ReviewModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }

    public function review()
    {
        $review = ReviewModel::all();

        return view('admin.review', compact('review'));
    }
}
