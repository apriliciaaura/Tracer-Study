<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrafik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grafik', function (Blueprint $table) {
            $table->bigIncrements('id_grafik');
            $table->string('judul', 255);
            $table->string('soal', 255);
            $table->string('jenis_grafik', 255);
            $table->string('jenis_label', 255);
            $table->string('tahun_lulus', 255);
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
        Schema::dropIfExists('grafik');
    }
}
