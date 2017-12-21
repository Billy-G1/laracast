<?php

namespace App\Providers;

//namespace App;

use Illuminate\Support\ServiceProvider;

use App\Post;

class AppServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		
		
        \View::composer('layouts.sidebar', function($view) {
			$view->with('archives', Post::archives() );
		});
		
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
