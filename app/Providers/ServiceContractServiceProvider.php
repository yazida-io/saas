<?php

namespace App\Providers;

use App\Services\AuthenticationService;
use App\Services\Contracts\AuthenticationContract;
use App\Services\Contracts\PostCategoryContract;
use App\Services\Contracts\PostContract;
use App\Services\PostCategoryService;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class ServiceContractServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(AuthenticationContract::class, AuthenticationService::class);
        $this->app->singleton(PostCategoryContract::class, PostCategoryService::class);
        $this->app->singleton(PostContract::class, PostService::class);
    }

    public function boot(): void
    {
    }
}
