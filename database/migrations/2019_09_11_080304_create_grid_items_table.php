<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGridItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grid_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('sequence')->comment('grid sequence: from 0 to 8');
            $table->string('title');
            $table->string('link');
            $table->unsignedBigInteger('color_id');
            $table->timestamps();

            $table->foreign('color_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grid_items');
    }
}
