<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holdings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->char('name', 60);               // Fixed length name
            $table->float('ounces', 6,4);           // single unit weight
            $table->integer('finess');              // .999 for fine etc...
            $table->integer('purchase_price');      // purchase price in USD
            $table->integer('quantity');            // quantity purchased
            $table->date('purchase_date');          // date of purchase
            $table->enum('visibility', ['private', 'public']);
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holdings');
    }
}
