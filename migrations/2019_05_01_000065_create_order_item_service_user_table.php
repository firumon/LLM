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
            $table->dateTimeTz('assigned_on')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('start_at');
            $table->unsignedBigInteger('end_at');
            $table->unsignedBigInteger('service_time');
            $table->unsignedBigInteger('total_time');
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
