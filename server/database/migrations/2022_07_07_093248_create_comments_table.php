<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateCustomerRatingTable extends Migration
=======
class CreateCommentsTable extends Migration
>>>>>>> 3c579c605a131a940bc7143716726a667bf63c48
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

=======
            $table->increments('comment_id');
            $table->integer('user_id')->unsigned();
            $table->integer('comment_star');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
>>>>>>> 3c579c605a131a940bc7143716726a667bf63c48
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
