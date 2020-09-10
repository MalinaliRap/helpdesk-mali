<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('person', function (Blueprint $table) {
            $table->unsignedBigInteger('per_fk_sec_id');
            $table->foreign('per_fk_sec_id')->references('id')->on('sector');
            $table->unsignedBigInteger('per_fk_use_id');
            $table->foreign('per_fk_use_id')->references('id')->on('users');
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
        Schema::table('person_contact', function (Blueprint $table) {
            $table->dropForeign('per_fk_sec_id');
            $table->dropForeign('per_fk_use_id');
        });
    }
}
