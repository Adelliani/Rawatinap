<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->bigIncrements('id_diagnosa');
            $table->date('tgl_diagnosa');
            $table->date('jam_diagnosa');
            $table->enum('jenis_diagnosa',['utama','sekunder']);
            $table->string('tinggi',100);
            $table->string('berat',100);
            $table->string('suhubadan',100);
            $table->string('hasil_diagnosa',100);
            $table->bigInteger('id_rawatinap')->unsigned();
            $table->foreign('id_rawatinap')->references('id_rawatinap')->on('rawat_inaps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosas');
    }
}
