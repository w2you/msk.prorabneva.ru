<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageFieldsToRepairs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->string('image');
            $table->text('image_before')->nullable();
            $table->text('image_after')->nullable();
            $table->text('image_3d_tour')->nullable();
            $table->text('image_design_project')->nullable();
            $table->dropColumn('price');
            $table->integer('area')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('image_before');
            $table->dropColumn('image_after');
            $table->dropColumn('image_3d_tour');
            $table->dropColumn('image_design_project');
        });
    }
}
