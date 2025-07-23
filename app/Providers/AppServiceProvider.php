<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ReplacementOrderRepository;
use App\Repositories\ReplacementOrderRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ReplacementOrderRepositoryInterface::class,
            ReplacementOrderRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
