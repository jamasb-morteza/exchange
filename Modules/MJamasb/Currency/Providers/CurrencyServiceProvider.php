<?php

namespace MJamasb\Currency\Providers;

use Illuminate\Support\ServiceProvider;
use MJamasb\User\Models\User;

class CurrencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/../Routes/currency_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/Factories');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views','User');
    }
}
