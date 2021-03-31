<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToCategoryMainRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_main_repair', function (Blueprint $table) {
            $table->text('operations')->nullable();
            $table->text('what_we_do')->nullable();
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
            $table->dropColumn('operations');
            $table->dropColumn('what_we_do');
        });
    }
}
