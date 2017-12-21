<?php

namespace App;

use Illuminate\Database\Eloquent;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;
use App\Http\Controllers\PostsController;

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
	
	public function scopeFilter($query, $filters)
	{
		if (!empty($filters['month']) && !empty($filters['year']))
		{
			//exit(var_dump($filters['month']));
			if ($month = $filters['month']) 
			{
				$query->whereMonth('created_at', Carbon::parse($month)->month);
			}
			
			if ($year = $filters['year'])
			{
				$query->whereYear('created_at', $year);
			}
		}
	}
	
	public static function archives()
	{
		
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
			->groupBy('year', 'month')
			//->orderByRaw('max(created_at)')
			->get()->toArray();
	}
}
