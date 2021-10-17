<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->string('kode_kredit', 20);
            $table->string('ktp_pembeli');
            $table->string('kode_paket',20);
            $table->string('kode_mobil',20);
            $table->date('tgl_kredit');
            $table->string('fotokopi_ktp',20);
            $table->string('fotokopi_kk',20);
            $table->string('fotokopi_slip_gaji',20);
            $table->timestamps();

            $table->primary('kode_kredit');
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembeli')->cascadeOnUpdate();
            $table->foreign('kode_paket')->references('kode_paket')->on('paket_kredit')->cascadeOnUpdate();
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
        Schema::dropIfExists('kredit');
    }
}
