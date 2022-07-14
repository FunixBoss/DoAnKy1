<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('cart_id');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->integer('customer_id');
=======
            $table->integer('user_id')->unsigned();
>>>>>>> 3c579c605a131a940bc7143716726a667bf63c48
=======
            $table->integer('user_id')->unsigned();
>>>>>>> cart
            $table->integer('ticket_id');
            $table->date('cart_date');
            $table->integer('payment');

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
