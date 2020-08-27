<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityHasPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_has_person', function (Blueprint $table) {
            $table->unsignedBigInteger('ahp_fk_act_id');
            $table->foreign('ahp_fk_act_id')->references('id')->on('activity');
            $table->unsignedBigInteger('ahp_fk_per_id');
            $table->foreign('ahp_fk_per_id')->references('id')->on('person');
            $table->boolean('ahp_is_author');
            $table->integer('ahp_status');
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
        Schema::dropIfExists('activity_has_person');
    }
}
