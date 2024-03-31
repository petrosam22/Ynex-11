<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AuthRepositories;
use App\Interfaces\AuthRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class,AuthRepositories::class );

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
