<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '128')->index();
            $table->string('address', '1024')->nullable();
            $table->string('phone', '64')->nullable();
            $table->string('email', '256')->nullable();
            $table->string('website', '512')->nullable();
            $table->unsignedSmallInteger('pin')->nullable();
            $table->string('url', '64')->nullable();
            $table->enum('status', ['Active','Inactive'])->nullable()->default('Active');
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
        Schema::dropIfExists('hubs');
    }
}
