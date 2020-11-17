<?php
/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 16/11/2020
 * Time: 12:24 AM
 */

namespace Badzohreh\Media\Providers;


use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'./../Database/Migrations');

    }

    public function boot()
    {

    }

}