<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('invoice', 'invoices');
            $table->foreignNullable('item', 'items');
            $table->foreignNullable('service', 'services');
            $table->foreignNullable('ois', 'order_item_services');
            $table->float('price', 9,2)->nullable()->default(0);
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
        Schema::dropIfExists('invoice_items');
    }
}
