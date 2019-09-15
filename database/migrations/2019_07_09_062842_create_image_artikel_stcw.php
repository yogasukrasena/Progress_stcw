<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageArtikelStcw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_artikel_stcw', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_artikel');
            $table->string('foto_artikel');
            $table->string('sumber_foto');
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
        Schema::dropIfExists('image_artikel_stcw');
    }
}
