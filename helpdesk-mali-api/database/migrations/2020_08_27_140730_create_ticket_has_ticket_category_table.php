<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketHasTicketCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_has_ticket_category', function (Blueprint $table) {
            $table->unsignedBigInteger('tht_fk_tic_id');
            $table->foreign('tht_fk_tic_id')->references('id')->on('ticket');
            $table->unsignedBigInteger('tht_fk_ticcat_id');
            $table->foreign('tht_fk_ticcat_id')->references('id')->on('ticket_category');
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
        Schema::dropIfExists('ticket_has_ticket_category');
    }
}
