<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personal;

class ShowController extends Controller
{
    public function show() {
        
        return view('home');

    }
}
