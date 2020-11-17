<?php

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
            $table->string('email')->unique();
            $table->string('password');
//            todo change enums codes

//            todo add some permissions

            $table->string("avatar")->nullable();
            $table->enum("education",[""])->default(['sikls'])->nullable();
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
