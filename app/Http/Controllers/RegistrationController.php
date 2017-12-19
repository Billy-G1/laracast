<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller



{
    public function create()
	{
		return view('sessions.create');
	}
	
	public function store()
	{
		//validate the form
		
		$this->validate(request(), [
		'name' => 'required',
		'email' => 'required|unique:users|email',
		'password' => 'required|confirmed'
		]);
		
		//$a = compact('name', 'email');
		//dd($a);
		//create and save the user
		
		//$password = bcrypt('password');
		//dd(bcrypt('password'));
		//$user = User::create(request(['name', 'email', 'password']));   // bcrypt('password')      $user = User::create( request(['name', 'email', bcrypt('password')]) );
		$user = User::create([
		'name' => request('name'),
		'email' => request('email'),
		'password' => bcrypt(request('password'))
		]);
		//sign in
		auth()->login($user);
		//dd($user);
		//return redirect()->home();  //same as return redirect('/')?;
		return redirect('/');
		
	}
}
