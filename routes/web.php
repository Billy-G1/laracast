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
//ВНИМАНИЕ: наименее специфический маршрут нужно ставить вверху.
//Под wilcard {post} подойдёт и "create".
//Потому маршрут "create" выше, чем "/posts/{post}".
// Laravel will try to match the route according to the ORDER of routes registered

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts/create', 'PostsController@create');  //for page for post creation

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
//Route::get('/posts/', 'PostsController@all');



Route::post('/posts', 'PostsController@store');   //to store post after pressing button "publish", 
//                                                  request type is POST

Route::get('/about', function () {
    return view('about');
});

/*
Route::get('/', function () {
	$name = 'Alexander';
	$age = 27;
		
	return view('welcome', compact('name', 'age'));
});
*/


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