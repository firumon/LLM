<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['User','Hub','Item','Service'])->nullable()->default('User');
            $table->unsignedBigInteger('type_id')->index();
            $table->unsignedBigInteger('image1')->nullable();
            $table->unsignedBigInteger('image2')->nullable();
            $table->unsignedBigInteger('image3')->nullable();
            $table->audit();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
