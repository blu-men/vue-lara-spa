<?php

namespace App\Http\Controllers;

use App\TodoTask;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function index()
    {
         return TodoTask::all();
    }

    public function store(Request $request)
    {
        return TodoTask::create($request->all());
    }

    public function destroy(TodoTask $task)
    {
        $task->delete();

        return $task;
    }

}
