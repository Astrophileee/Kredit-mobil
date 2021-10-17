<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketKredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredit', function (Blueprint $table) {
            $table->string('kode_paket',20);
            $table->double('harga_paket');
            $table->double('uang_muka');
            $table->integer('paket_jml_cicilan');
            $table->double('bunga');
            $table->double('nilai_cicilan');
            $table->timestamps();

            $table->primary('kode_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_kredit');
    }
}
