<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketHasActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_has_activity', function (Blueprint $table) {
            $table->unsignedBigInteger('tha_fk_tic_id');
            $table->foreign('tha_fk_tic_id')->references('id')->on('ticket');
            $table->unsignedBigInteger('tha_fk_act_id');
            $table->foreign('tha_fk_act_id')->references('id')->on('activity');
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
        Schema::dropIfExists('ticket_has_activity');
    }
}
