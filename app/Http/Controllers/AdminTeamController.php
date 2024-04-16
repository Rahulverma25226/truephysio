<?php

namespace App\Http\Controllers;

use App\Models\TeamModel;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function team()
    {
        $team = TeamModel::all();
        return view('admin.team', compact('team'));
    }
    public function insertteam(Request $request)
    {


        $request->validate([
            'image' => 'required|file|max:20000',

        ]);

        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path().'/storage/TeamImages', $fileName);

        TeamModel::create([
            'name' =>  $request->name,
            'expert' => $request->expert,
            'image' => $fileName,
        ]);

        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }
    public function deleteteam($id)
    {
        $data = TeamModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
