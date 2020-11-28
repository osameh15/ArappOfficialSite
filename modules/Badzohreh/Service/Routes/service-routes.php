<?php


use Illuminate\Support\Facades\Route;

Route::get("/service/s/{ss}",function (){
    return view("Service::index");
});