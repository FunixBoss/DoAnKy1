<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
<<<<<<< HEAD
class CreateCustomerRatingTable extends Migration
=======
class CreateCommentsTable extends Migration
>>>>>>> 3c579c605a131a940bc7143716726a667bf63c48
=======
class CreateCommentsTable extends Migration
>>>>>>> cart
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
<<<<<<< HEAD
<<<<<<< HEAD

=======
            $table->increments('comment_id');
            $table->integer('user_id')->unsigned();
            $table->integer('comment_star');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
>>>>>>> 3c579c605a131a940bc7143716726a667bf63c48
=======
            $table->increments('comment_id');
            $table->integer('user_id')->unsigned();
            $table->integer('comment_star');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
>>>>>>> cart
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
