<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return view('task', ['task' => $task]);
    }

    public function showLogs($id)
    {
        $logs = Task::find($id)->logs();
        return view('logs', ['logs' => $logs]);
    }
}
