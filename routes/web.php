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
/*
Route::get('/', function () {
    return view('welcome', [
	'name' => 'World!',
	'var2' => 'var2'
	]);
});
*/

use App\Task;
//не работает с контроллером, просмотреть видео с таском и контроллером ещё раз, нужно разобраться
//Route::get('/', 'TasksControll

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');



Route::get('/', function () {
	$name = 'Alexander';
	$age = 27;
		
	return view('welcome', compact('name', 'age'));
});

Route::get('/about', function () {
    return view('about');
});

/*

Route::get('/', function () {
	$name = 'Alexander';
	$age = 27;
	//$tasks = DB::table('tasks')->get();
	$tasks = Task::all();
	//return $tasks;
	
	return view('welcome', compact('name', 'age', 'tasks'));
});

*/

/*
Route::get('/tasks/{task}', function ($id) {
	
	$task = Task::find($id);
	//$task = DB::table('tasks')->find($id);
	//dd($tasks);
	
	//return $tasks;
	
	return view('tasks', compact('task'));
});
*/



?>