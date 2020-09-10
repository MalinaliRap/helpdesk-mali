<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTicketStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('ticket_status', function (Blueprint $table) {
            $table->unsignedBigInteger('ticsta_fk_col_id');
            $table->foreign('ticsta_fk_col_id')->references('id')->on('color');
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
        Schema::table('ticket_status', function (Blueprint $table) {
            $table->dropForeign('ticsta_fk_col_id');
        });
    }
}
