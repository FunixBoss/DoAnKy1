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
<<<<<<< HEAD
            $table->integer('cart_id');
            $table->integer('ticket_id');
=======
            $table->integer('cart_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
>>>>>>> 3c579c605a131a940bc7143716726a667bf63c48
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
