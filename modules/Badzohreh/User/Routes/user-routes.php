<?php

use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "web", "namespace" => "Badzohreh\User\Http\Controllers"], function ($router) {
    Auth::routes(["verify" => true]);
    $router->get("/profile","UserController@edit_profile")->name("user_informaion");
});

