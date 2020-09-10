<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePersonContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('person_contact', function (Blueprint $table) {
            $table->unsignedBigInteger('percon_fk_per_id');
            $table->foreign('percon_fk_per_id')->references('id')->on('person');
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
            $table->dropForeign('percon_fk_per_id');
        });
    }
}
