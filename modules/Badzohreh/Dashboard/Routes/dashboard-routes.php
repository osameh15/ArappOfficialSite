<?php

use Illuminate\Support\Facades\Route;

Route::group(["namespace" => "Badzohreh\Dashboard\Http\Controllers", "middleware" => ["web", "auth", "verified"]], function ($router) {
    $router->get("/home", "DashboardController@index")->name("home");
});

