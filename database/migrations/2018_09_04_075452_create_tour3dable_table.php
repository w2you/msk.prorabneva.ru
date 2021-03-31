<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTour3dableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour3dable', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tour3d_id');
            $table->foreign('tour3d_id')->references('id')->on('tour3d')->onDelete('cascade');
            $table->morphs('tour3dable');
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
        Schema::dropIfExists('tour3dable');
    }
}
