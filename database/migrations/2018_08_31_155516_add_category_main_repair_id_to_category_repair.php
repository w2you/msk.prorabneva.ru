<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryMainRepairIdToCategoryRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_repair', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->unsignedInteger('category_main_repair_id');
            $table->foreign('category_main_repair_id')->on('category_main_repair')->references('id')->onDelete('cascade');
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
            $table->dropIndex(['category_main_repair']);
        });
    }
}
