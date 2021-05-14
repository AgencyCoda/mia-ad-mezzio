<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MiaAd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mia_ad', function (Blueprint $table) {
            $table->id();

            $table->string('title');
    $table->text('photo');
    $table->text('url');
    $table->string('photo_alt');
    $table->integer('views');
    $table->integer('clicks');
    $table->text('photo_mobile');
    $table->string('photo_mobile_alt');
    $table->integer('status');
    

            

            $table->timestamps();

            $table->integer('deleted')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mia_ad');
    }
}