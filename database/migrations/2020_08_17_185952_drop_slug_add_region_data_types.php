<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSlugAddRegionDataTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_types', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->smallInteger('region_id')->default(1);
            //$table->unique(['slug','region_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_types', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
            //$table->dropUnique(['slug','region_id']);
            $table->drop('region_id');
        });
    }
}
