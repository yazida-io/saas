<?php

namespace App\Providers;

use App\Services\AuthenticationService;
use App\Services\Contracts\AuthenticationContract;
use Illuminate\Support\ServiceProvider;

class ServiceContractServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(AuthenticationContract::class, AuthenticationService::class);
    }

    public function boot(): void
    {
    }
}
