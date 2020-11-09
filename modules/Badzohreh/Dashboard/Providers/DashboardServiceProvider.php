<?php

namespace Badzohreh\Dashboard\Providers;

use Badzohreh\RolePermission\Models\Permission;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . './../Routes/dashboard-routes.php');
        $this->loadViewsFrom(__DIR__ . './../Resources/Views', "Dashboard");
        $this->mergeConfigFrom(__DIR__ . "./../config/sidebar.php", "sidebar");
    }
    public function boot(){
        config()->set("sidebar.items.dashboard",[
            "icon"=>"i-dashboard",
            "name"=>"داشبورد",
            "routeName"=> "home",
        ]);

    }
}