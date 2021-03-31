<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPriceList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('price_list', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->unsignedInteger('repair_category_id')->nullable();
            $table->foreign('repair_category_id')->on('category_repair')->references('id')->onDelete('cascade');
            $table->unsignedInteger('service_category_id')->nullable();
            $table->foreign('service_category_id')->on('services')->references('id')->onDelete('cascade');
            $table->unsignedInteger('service_id')->nullable();
            $table->foreign('service_id')->on('services')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('price_list', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropForeign(['repair_category_id']);
            $table->dropColumn('repair_category_id');
            $table->dropForeign(['service_category_id']);
            $table->dropColumn('service_category_id');
            $table->dropForeign(['service_id']);
            $table->dropColumn('service_id');
        });
    }
}
