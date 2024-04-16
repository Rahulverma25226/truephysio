<?php

namespace App\Http\Controllers;

use App\Models\AppointmentModel;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show()

    {
        return view('appointment');
    }

    public function insertappointment(Request $request)
    {

        AppointmentModel::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'service_name' => $request->service_name,
            'date' => $request->date
        ]);

        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }

    
}
