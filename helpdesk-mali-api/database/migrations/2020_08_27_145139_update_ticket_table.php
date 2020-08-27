<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('tic_fk_pri_id');
            $table->foreign('tic_fk_pri_id')->references('id')->on('priority');
            $table->unsignedBigInteger('tic_fk_ticsta_id');
            $table->foreign('tic_fk_ticsta_id')->references('id')->on('ticket_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('ticket', function (Blueprint $table) {
            $table->dropForeign('tic_fk_pri_id');
            $table->dropForeign('tic_fk_ticsta_id');
        });
    }
}
