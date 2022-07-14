<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD

=======
            $table->increments('user_id');
            $table->string('email');
            $table->string('fullname');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->integer('level')->default(2);
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
