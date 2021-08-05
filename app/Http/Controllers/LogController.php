<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function getLogs($id)
    {
        $logs = Task::find($id)->logs;   
        return view('log.logs', ['logs' => $logs]);
    }

    public function create($id)
    {
        $log = new Log;
        return view('log.create', ['log' => $log, 'id' => $id]);
    }

    public function store(Request $request)
    {
        $log = new Log;
        $log->fill($request->all());

        if($log->save()){
            return redirect()->route('task.index');
        }else {
            return redirect()->route('logs.create');
        }
    }
}
