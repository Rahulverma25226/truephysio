<?php

namespace App\Http\Controllers;

use App\Models\CarrierOptionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Exception;


class CarrieroptionController extends Controller
{
    public function show()
    {
        return view('carrier_option');
    }


    public function insertform(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'resume' => 'required|file|max:20000',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        try {
            // Retrieve the uploaded file
            $resume = $request->file('resume');

            // Generate a unique file name
            $fileName = time() . '-' . $resume->getClientOriginalName();

            // Store the uploaded file in the specified directory
            $resume->storeAs('public/ResumeUpload', $fileName);

            // Create a new record in the database
            $carrierOption = new CarrierOptionModel();
            $carrierOption->name = $request->name;
            $carrierOption->phone = $request->phone;
            $carrierOption->email = $request->email;
            $carrierOption->resume = $fileName;
            $carrierOption->save();

            // Redirect back to the previous page with a success message
            return redirect()->back()->with('message', 'Data Inserted Successfully');
        } catch (\Exception $e) {
            // Error occurred, redirect back with an error message
            return redirect()->back()->with('error', 'Failed to insert data: ' . $e->getMessage());
        }
    }

}
