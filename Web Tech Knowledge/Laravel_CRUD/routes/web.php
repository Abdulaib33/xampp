<?php

// Import the Route facade to define routes
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Define a route for the root URL ('/')
Route::get('/', function () {
    // Return the 'welcome' view when the root URL is accessed
    return view('welcome');
});

// Define a GET route for the '/UploadPage' URL
Route::get('/UploadPage', 'App\Http\Controllers\UploadDataController@index');
// This route calls the `index` method of the `UploadDataController` when the '/UploadPage' URL is accessed via a GET request.
// The `index` method typically displays a form or page for uploading data.

// Define a POST route for the '/UploadData' URL
Route::post('/UploadData', 'App\Http\Controllers\UploadDataController@store');
// This route calls the `store` method of the `UploadDataController` when the '/UploadData' URL is accessed via a POST request.
// The `store` method typically handles form submissions, processes uploaded data, and saves it to the database.