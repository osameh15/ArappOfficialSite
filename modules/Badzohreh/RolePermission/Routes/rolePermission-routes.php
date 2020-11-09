<?php

use Illuminate\Support\Facades\Route;

Route::group(["namespace" => "Badzohreh\RolePermission\Http\Controllers",
    "middleware" => ["web", "auth", "verified"]],
    function ($router) {
        $router->get("/permissions", "RolePermissionController@index")->name("permission.index");

        $router->post('/role/create',"RolePermissionController@createRole")->name("role.create");

        $router->get("/role/{role}/edit","RolePermissionController@edit")->name("role.edit");
        $router->patch("/role/{role}/update","RolePermissionController@update")->name("role.update");

        $router->delete("/role/{Role}/delete","RolePermissionController@delete")->name("role.delete");
});