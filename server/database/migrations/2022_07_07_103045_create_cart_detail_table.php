<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_detail', function (Blueprint $table) {
            $table->increments('cart_detail_id');
            $table->integer('cart_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->integer('quantity');
            $table->integer('price');

            $table->foreign('cart_detail_id')->references('cart_id')->on('carts');
            $table->foreign('ticket_id')->references('ticket_id')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_detail');
    }
}
