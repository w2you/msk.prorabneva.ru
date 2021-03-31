<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alt');
            $table->integer('type')->default('1')->comment('1:image, 2:video');
            $table->integer('path');
            $table->unsignedInteger('attachmentable_id');
            $table->string('attachmentable_type');
            $table->boolean('is_main')->default(0);
            $table->boolean('before')->default(0);
            $table->boolean('after')->default(0);
            $table->boolean('3d_tour')->default(0);
            $table->boolean('design_project')->default(0);
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
        Schema::dropIfExists('attachments');
    }
}
