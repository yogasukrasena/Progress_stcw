<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailArtikelStcw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_artikel_stcw', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_artikel');
            $table->text('isi_artikel');
            $table->string('penulis');
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
        Schema::dropIfExists('detail_artikel_stcw');
    }
}
