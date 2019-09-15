<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPengurusStcw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengurus_stcw', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengurus');
            $table->integer('id_anggota');
            $table->date('mulai_menjabat');
            $table->date('akhir_menjabat');
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
        Schema::dropIfExists('detail_pengurus_stcw');
    }
}
