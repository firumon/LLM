<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubDefaultShelfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hub_default_shelf', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('hub', 'hubs');
            $table->foreignCascade('shelf', 'shelf');
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
        Schema::dropIfExists('hub_default_shelf');
    }
}
