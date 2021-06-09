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

    public function update(Request $request, TodoTask $task)
    {
        $task->update($request->all());

        return $task;
    }

    public function destroy(TodoTask $task)
    {
        $task->delete();

        return $task;
    }

}
