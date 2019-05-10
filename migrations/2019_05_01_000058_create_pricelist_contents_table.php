<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricelistContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricelist_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('pl', 'pricelist');
            $table->foreignCascade('is', 'item_services');
            $table->float('price', 9,2)->nullable()->default(0);
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
        Schema::dropIfExists('pricelist_contents');
    }
}
