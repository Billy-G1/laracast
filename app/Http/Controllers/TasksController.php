<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    function index()
	{
		$tasks = Task::all();
		
		return view('tasks/index', compact('tasks'));
	}
	
	public function show(Task $task)
	{
		//$task = Task::find($id);
		
		return view('tasks/show', compact('task'));
	}
}
