<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function faq()
    {
        $faq = FaqModel::all();
        return view('admin.faq', compact('faq'));
    }
    public function insertFaq(Request $request)
    {
        FaqModel::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }
    public function deleteFaq($id)
    {
        $data = FaqModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
