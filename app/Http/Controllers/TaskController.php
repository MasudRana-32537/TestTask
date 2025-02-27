<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'is_completed' => false,
        ]);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $request->validate([
            'is_completed' => 'required|boolean',
        ]);

        $task->update(['is_completed' => $request->is_completed]);

        return response()->json($task);
    }

    public function getPendingTasks()
    {
        $tasks = Task::where('is_completed', false)->get();
        return response()->json($tasks);
    }
}
