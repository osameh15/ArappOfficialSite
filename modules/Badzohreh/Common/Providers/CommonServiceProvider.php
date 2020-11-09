<?php
/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 29/10/2020
 * Time: 11:34 AM
 */

namespace Badzohreh\Common\Providers;


use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . './../Resources/Views', "Common");
        require_once __DIR__ . './../helpers.php';
    }

    public function boot()
    {

    }

}