<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_info', function (Blueprint $table) {
            $table->increments('id');
            $table->text('top_title');
            $table->text('top_description');
            $table->text('bottom_title');
            $table->text('bottom_description');
            $table->string('image')->nullable();
            $table->text('stats');
            $table->unsignedInteger('page_id');
            $table->foreign('page_id')->on('pages')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('repair_info');
    }
}
