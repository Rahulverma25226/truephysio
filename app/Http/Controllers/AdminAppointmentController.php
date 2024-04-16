<?php

namespace App\Http\Controllers;

use App\Models\AppointmentModel;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    public function appointment()
    {
        $appointment = AppointmentModel::all();
        return view('admin.appointment', compact('appointment'));
    }

    public function deleteappointment($id)
    {
        $data = AppointmentModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data Delete');
    }
}
