<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show', 'create']);
	}
	
    public function index()
	{
		$posts = Post::latest()->get();
		
		return view ('posts/index', compact('posts'));
	}
	
	public function show(Post $post)
	{
		return view ('posts/show', compact('post'));
	}
	
	public function all()
	{
		//exit("Stop now!");
		return view ('posts/all');
	}
	
	public function create()
	{
		if (Auth::check())
		{
			//exit('authenticated');
		return view ('posts/create');
		}
		
		
		else 
		{
			return redirect('/login');
		}
		
	}
	
	public function store()
	{
		//dd(request(['title', 'body', 'auth()->id()']));
		$post = new Post;
		/*
		$post->title = request('title');
		$post->body = request('body');
		
		$post->save();
		*/
		$this->validate(request(), [
			'title' => 'required',
			'body' => 'required'
		]);
		
		//Post::create(request(['title', 'body', 'user_id']));
		//auth()->user()->publish( new Post(request(['title', 'body'])));
		//dd (auth()->id());
		
		Post::create([
		'title' => request('title'),
		'body' => request('body'),
		'user_id' => Auth::id()               //13:20
		]);
		
		return redirect('/');
		//return redirect("/posts/$post->id");
	}
}
