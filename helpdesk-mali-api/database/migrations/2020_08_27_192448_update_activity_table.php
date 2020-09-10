<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('activity', function (Blueprint $table) {
            $table->unsignedBigInteger('act_fk_actsta_id');
            $table->foreign('act_fk_actsta_id')->references('id')->on('activity_status');
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
        Schema::table('activity', function (Blueprint $table) {
            $table->dropForeign('act_fk_actsta_id');
        });
    }
}
