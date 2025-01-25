<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all(); // Fetch all tasks
        return view('tasks', ['tasks' => $tasks]); // Pass tasks to the view
    }

    public function show($id) {
        $task = Task::find($id); // Fetch the task by its ID
        return view('task', ['task' => $task]); // Pass the task to the view
    }


    public function store(Request $request) {
        Task::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $validated = $request->valide([
            'title' => 'required|max:100',
            'description' => 'required'
        ]);

        return redirect('/tasks'); // Redirect back to tasks list
    }
}