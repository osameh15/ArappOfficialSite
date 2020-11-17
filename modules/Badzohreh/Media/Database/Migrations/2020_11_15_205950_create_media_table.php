<?php
use Badzohreh\Media\Model\Media;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->json("files");
            $table->enum("type",Media::$TYPES);
            $table->string("filename");
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("CASCADE");
        });
    }

    public function down()
    {
        Schema::dropIfExists('media');
    }
}
