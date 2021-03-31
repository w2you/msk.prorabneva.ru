<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCategoryMainRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->text('advantages')->nullable();
            $table->string('top_description')->nullable();
            $table->text('banner')->nullable();
            $table->text('why_we')->nullable();
            $table->text('faq')->nullable();
            $table->text('design_repairs')->nullable();
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
            $table->dropColumn('advantages');
            $table->dropColumn('top_description');
            $table->dropColumn('banner');
            $table->dropColumn('why_we');
            $table->dropColumn('faq');
            $table->dropColumn('design_repairs');
        });
    }
}
