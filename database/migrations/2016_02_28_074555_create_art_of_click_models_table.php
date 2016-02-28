<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtOfClickModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_of_click_models', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('name')->nullable();
            $table->boolean('incent')->nullable();
            $table->text('previewUrl')->nullable();
            $table->text('description')->nullable();
            $table->string('payoutType')->nullable();
            $table->double('payout')->nullable();
            $table->string('currency')->nullable();
            $table->string('storeId')->nullable();
            $table->string('noticePeriod')->nullable();
            $table->string('creatives')->nullable();
            $table->string('browser')->nullable();
            $table->string('device')->nullable();
            $table->string('os')->nullable();
            $table->string('osVersionMinimum')->nullable();
            $table->string('countries')->nullable();
            $table->string('trackingUrl')->nullable();
            $table->boolean('approved')->nullable();
            $table->string('downloadType')->nullable();
            $table->string('monthlyCap')->nullable();
            $table->integer('dailyCap')->nullable();
            $table->integer('dailyCapsRemaining')->nullable();
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
        Schema::drop('art_of_click_models');
    }
}
