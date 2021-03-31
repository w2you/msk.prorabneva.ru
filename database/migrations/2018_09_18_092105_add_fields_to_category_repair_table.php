<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCategoryRepairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_repair', function (Blueprint $table) {
            $table->text('operations')->nullable();
            $table->text('prices')->nullable();
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
        Schema::table('category_repair', function (Blueprint $table) {
            $table->dropColumn('operations');
            $table->dropColumn('prices');
            $table->dropColumn('what_we_do');
        });
    }
}
