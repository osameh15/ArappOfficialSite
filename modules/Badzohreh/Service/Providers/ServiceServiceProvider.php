<?php

namespace Badzohreh\Service\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . "./../Routes/service-routes.php");
        $this->loadMigrationsFrom(__DIR__ . "./../Database/Migrations");
        $this->loadViewsFrom(__DIR__ . "./../Resources/Views","Service");
    }

    public function boot()
    {

    }
}