<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            //$table->increments('id_key');
            $table->integer('id')->primary();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->text('preview_url')->nullable();
            $table->string('currency')->nullable();
            $table->double('default_payout')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('expiration_date')->nullable();
            $table->string('payout_type')->nullable();
            $table->dateTime('featured')->nullable();
            $table->integer('offerfile_id');
            $table->integer('key_id');
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
        Schema::drop('offers');
    }
}
