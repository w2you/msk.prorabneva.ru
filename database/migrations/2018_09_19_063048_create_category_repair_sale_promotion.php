<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryRepairSalePromotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_repair_sale_promotion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_repair_id');
            $table->foreign('category_repair_id')->on('category_repair')->references('id')->onDelete('cascade');
            $table->unsignedInteger('sale_promotion_id');
            $table->foreign('sale_promotion_id')->on('sale_promotions')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('category_repair_sale_promotion');
    }
}
