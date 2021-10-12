<?php

namespace MJamasb\Auth\Providers;

use Illuminate\Support\ServiceProvider;
use MJamasb\Auth\Models\User;

class AuthAppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        config()->set('auth.providers.users.model', User::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/../Routes/auth_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/Factories');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views','Auth');
    }
}
