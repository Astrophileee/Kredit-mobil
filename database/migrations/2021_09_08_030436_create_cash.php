<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash', function (Blueprint $table) {
            $table->string('kode_cash');
            $table->string('ktp_pembeli');
            $table->string('kode_mobil');
            $table->date('tgl_beli_cash');
            $table->double('bayar_cash');
            $table->timestamps();


            $table->primary('kode_cash');
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembeli')->cascadeOnUpdate();
            $table->foreign('kode_mobil')->references('kode_mobil')->on('mobil')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash');
    }
}
