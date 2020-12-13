<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->bigIncrements('id_soal');
            $table->string('kode_soal', 11);
            $table->string('soal', 255);
            $table->unsignedBigInteger('kategori_id')->index();
            $table->string('no_urut', 11);
            $table->string('status', 11);
            $table->timestamps();

            $table->foreign('kategori_id')->references('id_kategori')->on('kategori_soal')
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
        Schema::dropIfExists('soal');
    }
}
