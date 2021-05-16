<?php

namespace EgeaTech\LaravelRequests\Providers;

use Illuminate\Support\ServiceProvider;
use EgeaTech\LaravelRequests\LaravelRequests;

class LaravelRequestsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the service the package provides.
        $this->app->singleton('laravel-requests', function ($app) {
            return new LaravelRequests;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-requests'];
    }
}
