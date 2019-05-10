<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('oi', 'order_items');
            $table->foreignCascade('service', 'services');
            $table->enum('progress', ['New','Assigned','Processing','Completed','Awaiting'])->nullable()->default('New');
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
        Schema::dropIfExists('order_item_services');
    }
}
