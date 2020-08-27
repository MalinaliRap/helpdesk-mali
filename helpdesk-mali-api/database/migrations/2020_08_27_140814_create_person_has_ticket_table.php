<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonHasTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_has_ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('pht_fk_tic_id');
            $table->foreign('pht_fk_tic_id')->references('id')->on('ticket');
            $table->unsignedBigInteger('pht_fk_per_id');
            $table->foreign('pht_fk_per_id')->references('id')->on('person');
            $table->boolean('pht_is_author');
            $table->integer('pht_status');
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
        Schema::dropIfExists('person_has_ticket');
    }
}
