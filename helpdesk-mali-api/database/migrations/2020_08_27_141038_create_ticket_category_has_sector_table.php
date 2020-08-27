<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketCategoryHasSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_category_has_sector', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tchs_fk_ticcat_id');
            $table->foreign('tchs_fk_ticcat_id')->references('id')->on('ticket_category');
            $table->unsignedBigInteger('tchs_fk_sec_id');
            $table->foreign('tchs_fk_sec_id')->references('id')->on('sector');
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
        Schema::dropIfExists('ticket_category_has_sector');
    }
}
