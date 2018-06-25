<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
		\App\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Post::observe(\App\Observers\PostObserver::class);
        \Carbon\Carbon::setLocale('zh');
        //
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
