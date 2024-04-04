<?php

namespace App\Providers;

use App\Repositories\AuthRepositories;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SkillsRepositories;
use App\Repositories\ProfileRepositories;
use App\Interfaces\AuthRepositoryInterface;
use App\Interfaces\SkillsRepositoryInterface;
use App\Interfaces\ProfileRepositoryInterface;

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


        
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
