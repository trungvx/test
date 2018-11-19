<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BlogCustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Services\BlogServiceInterface::class,
            \App\Services\Blog\BlogService::class
        );
    }
}
