<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('*', '\App\Http\Composers\ContestComposer');
    }
}
