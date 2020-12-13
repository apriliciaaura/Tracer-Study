<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCombobox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_combobox', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->unsignedBigInteger('combobox_id')->index();
            $table->string('nilai', 50);
            $table->string('keterangan', 100);
            $table->string('no_urut', 11);
            $table->timestamps();

            $table->foreign('combobox_id')->references('id_combobox')->on('data_combobox')
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
        Schema::dropIfExists('detail_combobox');
    }
}
