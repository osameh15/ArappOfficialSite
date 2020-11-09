<?php

namespace Badzohreh\RolePermission\Providers;


use Badzohreh\RolePermission\Models\Permission;
use Badzohreh\RolePermission\Models\Role;
use Badzohreh\RolePermission\Policies\RolePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class RolePermissionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . './../Database/Migrations');
        $this->loadRoutesFrom(__DIR__ . "./../Routes/rolePermission-routes.php");
        $this->loadViewsFrom(__DIR__ . './../Resources/Views', "Permission");
        $this->loadJsonTranslationsFrom(__DIR__."./../Resources/Lang");
        Gate::policy(Role::class,RolePolicy::class);
    }

    public function boot()
    {
        config()->set("sidebar.items.rolePermission",[
            "icon"=>"i-categories",
            "name"=>"نقش های کاربری",
            "routeName"=> "permission.index",
            "permissions"=>Permission::MANAGE_PERMISSIONS,
        ]);

    }
}