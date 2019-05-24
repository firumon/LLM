<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('order', 'orders');
            $table->foreignNullable('item', 'items');
            $table->foreignNullable('hub', 'hubs');
            $table->foreignNullable('label', 'identity_labels');
            $table->foreignNullable('shelf', 'shelf');
            $table->date('delivery')->nullable();
            $table->enum('progress', ['New','In Service','Service Completed','Ready To Deliver','Delivered'])->nullable()->default('New');
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
        Schema::dropIfExists('order_items');
    }
}
