<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}
	
    public function login()
	{
		return view ('sessions/login');
	}
	
	public function store()
	{
		/*
		var_dump ($_POST['email']); var_dump ($_POST['password']); echo '<br>';
		$email = $_POST['email']; $password = $_POST['password'];
		var_dump ($email); var_dump ($password);
		dd(auth()->attempt(request(['email', 'password'])));
		//dd (auth()->user());
		//dd ((auth()->attempt(request(['email', 'password']))));
		//echo '<br>';
		//var_dump(compact('email', 'password'));
		//echo '<br>';
		
		//$tmp = Auth::attempt(compact('email', 'password'));
		echo '<br>';
		var_dump($tmp);
		*/
		//if (!Auth::attempt(['email', 'password']))
		if (!auth()->attempt(request(['email', 'password'])))
		{
			
			return back()->withErrors([
			'message' => 'Please check your credentials and try again'			
			]);
			
			
		}
		/*
		else 
		{
			//auth()->login($user);
		}
		*/
			return redirect()->home();
		
	}
	
	public function logout()
	{
		auth()->logout();
		
		return redirect('/');
		
	}
}
