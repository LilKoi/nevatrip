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
            $table->bigInteger('type_id');
            $table->bigInteger('barcode');
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
