<?php

namespace LP\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->make('LP\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views','calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
