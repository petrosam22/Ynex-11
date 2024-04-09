<?php

namespace App\Providers;

use App\Repositories\AuthRepositories;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SkillsRepositories;
use App\Repositories\StatusRepositories;
use App\Repositories\ProfileRepositories;
use App\Interfaces\AuthRepositoryInterface;
use App\Interfaces\SkillsRepositoryInterface;
use App\Interfaces\StatusRepositoryInterface;
use App\Interfaces\ProfileRepositoryInterface;
use App\Repositories\PasswordResetRepositories;
use App\Interfaces\PasswordResetRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */


     public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class,AuthRepositories::class );
        $this->app->bind(SkillsRepositoryInterface::class,SkillsRepositories::class );

        $this->app->bind(ProfileRepositoryInterface::class,ProfileRepositories::class );
        $this->app->bind(PasswordResetRepositoryInterface::class,PasswordResetRepositories::class );
        $this->app->bind(StatusRepositoryInterface::class,StatusRepositories::class );

        
        



    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
