<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pasien', function (Blueprint $table) {
            $table->id();
            $table->integer("id_dokter");
            $table->integer("id_pasien");
            $table->string("keluhan", 255);
            $table->string("penyakit", 100);
            $table->date("tgl_berobat");
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
        Schema::dropIfExists('Pasien');
    }
}
