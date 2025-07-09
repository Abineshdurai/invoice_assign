<?php

namespace App\Providers;

use App\Services\InvoiceCalculator;
use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(InvoiceCalculator::class, function ($app) {
            return new InvoiceCalculator();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void 
    {
        //
    }
}
