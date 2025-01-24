<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class UploadDataController extends Controller
{
    /**
     * Display the upload form.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        // Return the view for the upload page
        return view("uploadpage");
    }

    /**
     * Handle the form submission and file upload.
     *
     * @param Request $request The incoming request containing form data and file
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'file' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Example validation rules
        ]);
    
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage'), $filename);
        }
    
        // Save data to the database
        $data = new Personal;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->file = $filename; // Save the filename to the database
        $data->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data uploaded successfully!');
    }
}