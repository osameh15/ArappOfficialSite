<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//
//Route::group(["namespace"=>"App\Http\Controllers","middleware"=>["verified"]],function ($router){
//    $router->get("/home","HomeController@index")->name("home");
//});
//
//



$router->get("test",function (){
    auth()->user()->givePermissionTo(\Badzohreh\RolePermission\Models\Permission::SUPER_ADMIN);
    dd(auth()->user()->permissions);
});