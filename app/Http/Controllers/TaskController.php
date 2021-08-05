<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::where('user_id', Auth::id())->get();
        return view('task.index', ['task' => $task]);
    }

    public function showLogs($id)
    {
        $logs = Task::find($id)->logs();
        return view('logs', ['logs' => $logs]);
    }

    public function create()
    {
        $task = new Task;
        return view('task.create', compact('task'));
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->fill($request->all());

        if($task->save()){
            return redirect()->route('task.index');
        }else {
            return redirect()->route('task.create');
        }
    }
}
