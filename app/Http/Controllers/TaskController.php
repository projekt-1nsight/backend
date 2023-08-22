<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display all Tasks
    public function index()
    {
        return Task::all();
    }

    // Create a new Task
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|string',
            'day' => 'required|string',
            'reminder' => 'boolean'
        ]);

        return Task::create($request->all());
    }

    // Display a single Task (For now not needed. 
    // No search and display functionality added.
    // Still, I'm gonna put this here if the need arises.
    public function show(string $id)
    {
        return Task::find($id);
    }


    // Still not needed. No edit functionality added.
    // Still gonna put this here for future use.
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return $task;
    }


    public function destroy(string $id)
    {
        return Task::destroy($id);
    }
}
