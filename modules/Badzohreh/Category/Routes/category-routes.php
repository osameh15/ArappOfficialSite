<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => "Badzohreh\Category\Http\Controllers",
    'middleware' => ["web", "auth", "verified"]], function ($router) {
    $router->get("/categories", "CategoryController@index")->name("categories");
    $router->post("/category/create", "CategoryController@create")->name("category.create");

    $router->get("/category/{category}/edit", "CategoryController@edit")->name("cateogry.edit");
    $router->patch("/category/{category}/update", "CategoryController@update")->name("category.update");

    $router->delete("/category/{category}/delete", "CategoryController@delete")->name("category.delete");

});