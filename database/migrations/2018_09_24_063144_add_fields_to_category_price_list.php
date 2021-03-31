<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCategoryPriceList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_price_list', function (Blueprint $table) {
            $table->text('faq')->nullable();
            $table->text('top_description');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_price_list', function (Blueprint $table) {
            $table->dropColumn('faq');
            $table->dropColumn('description');
        });
    }
}
