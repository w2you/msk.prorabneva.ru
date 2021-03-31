<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSailPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image');
            $table->text('short_description');
            $table->text('sales');
            $table->text('conditions');
            $table->text('tags')->nullable();
            $table->string('bottom_title')->nullable();
            $table->string('hint')->nullable();
            $table->string('phone')->nullable();
            $table->text('banner')->nullable();
            $table->text('why_we')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sail_promotions');
    }
}
