<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\RepositoryInterfaces\IUserRepository;
use APP\ServiceInterfaces\IUserService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /**
         * Register all servises here
         */
        $this->app->bind(IUserService::class,UserService::class);

        /**
         * Register all repository here....
         */
        $this->app->bind(IUserRepository::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
