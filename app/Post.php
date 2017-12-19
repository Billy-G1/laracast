<?php

namespace App;

use Illuminate\Database\Eloquent;
use Illuminate\Database\Query\Builder;



class Post extends Model
{
	//$id =1;
    protected $fillable = ['title', 'body', 'user_id', 'post_id'];
	/*
	protected $fillable = [
        'name', 'email', 'password', 'title', 'body', 'user_id', 'post_id'
    ];
	*/
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	
	public function addComment ($body)
	{
		//$this->comments()->create(compact('body'));
		
		
		Comment::create([
			'body' => $body,
			'post_id' => $this->id,
			'user_id' => auth()->user()->id()
			]);
			
	}
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
