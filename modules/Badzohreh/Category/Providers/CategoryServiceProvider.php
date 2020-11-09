<?php

namespace Badzohreh\Category\Providers;
use Badzohreh\Category\Models\Category;
use Badzohreh\Category\Policies\CategoryPolicy;
use Badzohreh\RolePermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__."./../Routes/category-routes.php");
        $this->loadViewsFrom(__DIR__."./../Resources/Views","Category");
        $this->loadMigrationsFrom(__DIR__."./../Database/Migrations");
        Gate::policy(Category::class,CategoryPolicy::class);
    }

    public function boot(){
        config()->set("sidebar.items.category",[
            "icon"=>"i-categories",
            "name"=>"دسته بندی ها",
            "routeName"=> "categories",
            "permissions"=>Permission::MANAGE_CATEGORIES,
        ]);
    }
}