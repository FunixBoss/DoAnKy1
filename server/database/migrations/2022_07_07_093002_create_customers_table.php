<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_id')->autoIncrement();
            $table->string('email');
            $table->string('username');
            $table->string('fullname');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->integer('level')->default(2);
            $table->rememberToken();
            $table->timestamps();
            // $table->primary('customer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
