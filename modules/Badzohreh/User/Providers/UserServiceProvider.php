<?php

namespace Badzohreh\User\Providers;

use Badzohreh\RolePermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
//       todo load login components
        $this->loadMigrationsFrom(__DIR__ . './../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . './../Resources/Views', "User");
        $this->loadJsonTranslationsFrom(__DIR__."./../Resources/Lang");
        Gate::before(function () {
            if (auth()->user()->hasPermissionTo(Permission::SUPER_ADMIN)) return true;
            return null;
        });
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../Routes/user-routes.php');
        config()->set("sidebar.items.user_information",[
            "icon"=>"i-user__inforamtion",
            "name"=>"اطلاعات من",
            "routeName"=> "user_informaion",
        ]);
    }
}