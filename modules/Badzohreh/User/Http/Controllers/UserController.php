<?php
namespace Badzohreh\User\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function edit_profile(){
        $user = auth()->user();
        return view("User::edit-user",compact("user"));
    }
}