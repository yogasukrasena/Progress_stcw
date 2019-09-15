<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiPengeluaranStcw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_pengeluaran_stcw', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_pengeluaran');
            $table->string('foto_bukti');            
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
        Schema::dropIfExists('bukti_pengeluaran_stcw');
    }
}
