<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '128')->index();
            $table->foreignCascade('item', 'items');
            $table->foreignCascade('service', 'services');
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
        Schema::dropIfExists('item_services');
    }
}
