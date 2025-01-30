<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::post('/tasks', [TaskController::class, 'store']);



// TODO APP WE DONT NEED A CONTROLLER WITH ALL OF ThiS LOGIC DOWN 


use App\Models\Todo;
use Illuminate\Http\Request;

// List all todos
Route::get('/todos', function () {
    $todos = Todo::all();
    return view('todos.index', ['todos' => $todos]);
});

// Show the form to create a new todo
Route::get('/todos/create', function () {
    return view('todos.create');
});

// Store a new todo
Route::post('/todos', function (Request $request) {
    Todo::create([
        'title' => $request->title,
        'description' => $request->description,
        'completed' => false, // Default to not completed
    ]);
    return redirect('/todos');
});

// Mark a todo as complete/incomplete
Route::patch('/todos/{todo}/toggle', function (Todo $todo) {
    $todo->update(['completed' => !$todo->completed]);
    return redirect('/todos');
});

// Delete a todo
Route::delete('/todos/{todo}', function (Todo $todo) {
    $todo->delete();
    return redirect('/todos');
});




// THIS LOGIC HERE IS FOR OUR SECOND TODO LIST APP BUT FOR THIS ONE WE WILL CREATE A CONTROLLER IT'S BETTER FOR WHEN YOU APP IS EXPANDING 

// use App\Http\Controllers\TodoController;

// // List all todos
// Route::get('/todos', [TodoController::class, 'index']);

// // Show the form to create a new todo
// Route::get('/todos/create', [TodoController::class, 'create']);

// // Store a new todo
// Route::post('/todos', [TodoController::class, 'store']);

// // Toggle a todo's completion status
// Route::patch('/todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');

// // Delete a todo
// Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.delete');