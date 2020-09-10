<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePriorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('priority', function (Blueprint $table) {
            $table->unsignedBigInteger('pri_fk_col_id');
            $table->foreign('pri_fk_col_id')->references('id')->on('color');
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
            $table->dropForeign('pri_fk_col_id');
        });
    }
}
