<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFiledsToRepairCategoryAndRepairMainCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_repair', function (Blueprint $table) {
            $table->string('menu_title');
        });

        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->string('menu_title');
            $table->string('repair_types_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_repair', function (Blueprint $table) {
            $table->dropColumn('menu_title');
        });

        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->dropColumn('menu_title');
            $table->dropColumn('repair_types_title');
        });
    }
}
