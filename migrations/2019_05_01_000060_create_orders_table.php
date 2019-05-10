<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignNullable('customer', 'users');
            $table->date('date')->nullable();
            $table->foreignNullable('pl', 'pricelist');
            $table->foreignNullable('user', 'users');
            $table->foreignNullable('hub', 'hubs');
            $table->enum('progress', ['New','In Service','Service Completed','Delivered Partially','Delivered'])->nullable()->default('New');
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
        Schema::dropIfExists('orders');
    }
}
