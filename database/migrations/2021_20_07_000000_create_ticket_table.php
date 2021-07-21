<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('event_id');
            $table->date('event_date');
            $table->mediumInteger('ticket_adult_price');
            $table->tinyInteger('ticket_adult_quantity');
            $table->mediumInteger('ticket_kid_price');
            $table->tinyInteger('ticket_kid_quantity');
            $table->bigInteger('barcode');
            $table->bigInteger('equal_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
