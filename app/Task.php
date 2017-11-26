<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    static function incomplete()
	{
		return static::where('complete', 1)->get();
	}
}
