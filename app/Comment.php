<?php

namespace App;

//use Illuminate\Database\Eloquent\Post;

class Comment extends Model
{
	//protected $fillable = ['body'];
	protected $fillable = [
        'name', 'email', 'password', 'title', 'body', 'user_id', 'post_id'
    ];
	
    public function post()
	{
		return $this->belongsTo(Post::class);
	}
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
