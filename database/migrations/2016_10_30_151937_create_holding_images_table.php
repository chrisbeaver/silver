<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoldingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holding_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('holding_id')->unsigned();
            $table->string('file_name');
            $table->timestamps();

            $table->foreign('holding_id')->references('id')->on('holdings');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holding_images');
    }
}
