<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateActivityStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('activity_status', function (Blueprint $table) {
            $table->unsignedBigInteger('actsta_fk_col_id');
            $table->foreign('actsta_fk_col_id')->references('id')->on('color');
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
        Schema::table('activity_status', function (Blueprint $table) {
            $table->dropForeign('actsta_fk_col_id');
        });
    }
}
