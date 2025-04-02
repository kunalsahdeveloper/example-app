<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //I wrote
        Route::pattern('mobile', '[0-9]+');
        view()->share('newmobile', '8032948322');
        // share - is used to pass data to all views(global data)



    }
}
