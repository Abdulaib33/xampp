<?php

// Import necessary controllers and Route facade
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\ShowController;
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

// Group routes for UploadDataController
Route::controller(UploadDataController::class)->group(function () {
    // Display the upload form
    // When a user visits '/upload-page', the `index` method of `UploadDataController` is called
    Route::get('/upload-page', 'index')->name('upload-page');

    // Handle form submissions
    // When a user submits a form to '/upload-data', the `store` method of `UploadDataController` is called
    Route::post('/upload-data', 'store')->name('upload.data');
});

// Route for ShowController
// When a user visits '/upload-data', the `show` method of `ShowController` is called
Route::get('/upload-data', [ShowController::class, 'show'])->name('upload.show');