<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $posts = \App\Models\Post::all();
        return view('welcome', ['posts' => $posts]);
    }
}
