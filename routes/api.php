<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::put('/tasks/{task}', 'TaskController@update');
Route::delete('/tasks/{task}', 'TodoTaskController@destroy');
Route::delete('/tasks/{task}', 'TaskController@destroy');
Route::get('/todotasks', 'TodoTaskController@index');
Route::post('/todotasks/{task}', 'TodoTaskController@store');
