<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRepairListTitleToCategoryMainRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->string('repair_list_title')->nullable();
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
            $table->string('repair_list_title')->nullable();
        });
    }
}
