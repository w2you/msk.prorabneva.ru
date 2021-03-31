<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablePagePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('page_id');
            $table->foreign('page_id')->on('pages')->references('id')->onDelete('cascade');
            $table->unsignedInteger('partner_id');
            $table->foreign('partner_id')->on('partners')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('page_partners');
    }
}
