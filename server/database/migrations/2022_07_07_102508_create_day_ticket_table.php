<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_ticket', function (Blueprint $table) {
            $table->increments('day_ticket_id');
            $table->integer('day_id')->unsigned();
            $table->integer('ticket_id')->unsigned();

            $table->foreign('ticket_id')->references('ticket_id')->on('tickets');
            $table->foreign('day_id')->references('day_id')->on('days');
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_ticket');
    }
}
