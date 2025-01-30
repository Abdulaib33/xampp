<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personal;

class ShowController extends Controller
{
    public function show() {
        $data = Personal::all(); // Fetch all records from the `personal` table
        return view('show-data', ['data' => $data]); // Pass the data to the view
    }
}
