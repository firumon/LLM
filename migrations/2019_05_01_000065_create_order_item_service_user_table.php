<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemServiceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_service_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('ois', 'order_item_services');
            $table->foreignNullable('user', 'users');
            $table->foreignNullable('assigned_by', 'users');
            $table->unsignedBigInteger('assigned_on')->nullable()->default(0);
            $table->unsignedBigInteger('start_at')->default(0);
            $table->unsignedBigInteger('end_at')->default(0);
            $table->unsignedBigInteger('service_time')->default(0);
            $table->unsignedBigInteger('total_time')->default(0);
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
        Schema::dropIfExists('order_item_service_user');
    }
}
