<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function welcome()
    {
        // Retrieve only tasks scheduled for today
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function index()
    {
        // Retrieve all tasks ordered by date
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }
}
