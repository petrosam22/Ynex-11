<?php

namespace App\Providers;

use App\Service\AuthService;
use App\Service\RoleService;
use App\Service\SkillService;
use App\Service\StatusService;
use App\Service\ProfileService;
use App\Service\UploadImageService;
use App\Service\PasswordResetService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Service\VerificationCodeService;
use App\Service\EventService;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthService::class);
        $this->app->bind(RoleService::class);
        $this->app->bind(UploadImageService::class);
        $this->app->bind(VerificationCodeService::class);
        $this->app->bind(SkillService::class);
        $this->app->bind(ProfileService::class);
        $this->app->bind(PasswordResetService::class);
        $this->app->bind(StatusService::class);
        $this->app->bind(EventService::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::defaultView('pagination.custom_pagination');


    }
}
