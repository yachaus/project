<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

Route::resource('projects','ProjectController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::patch('/task/{task}','ProjectTasksController@update');
Route::delete('/task/{task}','ProjectTasksController@destroy');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
