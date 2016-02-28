<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClickSmobModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('click_smob_models', function (Blueprint $table) {
            $table->integer('id');
            $table->string('offerName');
            $table->text('subHeadline');
            $table->text('description');
            $table->string('categories');
            $table->string('conversionMode');
            $table->text('conversionUserFlow');
            $table->text('restrictions');
            $table->string('notes');
            $table->string('androidPackageName');
            $table->integer('adultTraffic');
            $table->integer('incentiveAllowed');
            $table->integer('mediabuyerAllowed');
            $table->integer('keyworderAllowed');
            $table->integer('pushAllowed');
            $table->integer('applicationTrafficAllowed');
            $table->integer('publisherValidationAutomatic');
            $table->integer('allowedUseOwnCreative');
            $table->integer('allowedCustomizeBannerTarget');
            $table->integer('eachCreativeMustHaveDifferentLink');
            $table->integer('approvalRequired');
            $table->integer('needAcceptTerms');
            $table->integer('allowedWiFi');
            $table->integer('allowed3G');
            $table->integer('minimalAge');
            $table->integer('rebrokerAllowed');
            $table->integer('discoveryAllowed');
            $table->integer('emailingAllowed');
            $table->text('bannersURL');
            $table->text('targetURL');
            $table->text('thumbnailURL');
            $table->string('s2S');
            $table->text('android');
            $table->text('ios');
            $table->text('windowsPhone');
            $table->text('offerPreviews');
            $table->text('offerPayouts');
            $table->text('offerCaps');
            $table->string('iosbundleID');
            $table->integer('smsallowed');
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
        Schema::drop('click_smob_models');
    }
}
