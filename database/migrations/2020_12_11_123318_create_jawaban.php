<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id_jawaban');
            $table->unsignedBigInteger('soal_id');
            $table->unsignedBigInteger('jenis_id');
            $table->string('kode_jawaban', 11);
            $table->string('nilai', 11);
            $table->string('data_combobox', 11);
            $table->string('keterangan', 255);
            $table->string('no_urut', 11);
            $table->string('status', 11);
            $table->timestamps();

            $table->foreign('soal_id')->references('id_soal')->on('soal')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('jenis_id')->references('id_jenis')->on('jenis_jawaban')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
