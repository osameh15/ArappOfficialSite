<?php

use Badzohreh\User\Model\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
//            todo add column mobile
            $table->string('email')->unique();
            $table->string('password');
            $table->string("avatar")->nullable();
            $table->enum("education", User::$EDUCATION_TYPES)->nullable();
            $table->text("bio")->nullable();
            $table->timestamp("email_verified_at");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
