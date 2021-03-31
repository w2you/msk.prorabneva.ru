<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSlugAddRegionCategoryMainRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            //$table->smallInteger('region_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
            //$table->drop('region_id');
        });
    }
}
