<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cicilan', function (Blueprint $table) {
            $table->string('kode_cicilan');
            $table->string('kode_kredit');
            $table->date('tgl_cicilan');
            $table->double('jml_cicilan');
            $table->integer('cicilan_ke');
            $table->double('sisa_cicilan_ke');
            $table->double('sisa_harga_cicilan');
            $table->timestamps();

            $table->primary('kode_cicilan');
            $table->foreign('kode_kredit')->references('kode_kredit')->on('kredit')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cicilan');
    }
}
