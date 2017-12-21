<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show', 'create', 'all']);
	}
	
    public function index()
	{
		global $posts, $archives;
		$posts = Post::latest()
		->filter(request(['month', 'year']))
		->get();
		/*
		if ($month = request('month')) 
		{
			$posts->whereMonth('created_at', Carbon::parse($month)->month);
		}
		
		if ($year = request('year'))
		{
			$posts->whereYear('created_at', $year);
		}
		
		$posts = $posts->get();
		*/
		//$archives = Post::archives();
		
				
		return view ('posts/index', compact('posts'));
	}
	
	public function show(Post $post)
	{
		return view ('posts/show', compact('post'));
	}
	
	public function all()
	{
		//exit("Stop now!");
		//return view ('posts/all');
		return redirect('/');
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
			return redirect('/');
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
