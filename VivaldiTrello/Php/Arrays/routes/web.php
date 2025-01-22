<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/", function () {
    $name = request("name");
    return "Hello, $name";
});