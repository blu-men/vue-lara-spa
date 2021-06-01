<?php

namespace App\Http\Controllers;

use App\TodoTask;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function store(Request $request)
    {
        return TodoTask::create($request->all());
    }
}