<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeli2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli2s', function (Blueprint $table) {
            $table->string('ktp_pembeli',20);
            $table->string('nama_pembeli',255);
            $table->string('alamat_pembeli',255);
            $table->string('telpon_pembeli',255);
            $table->timestamps();

            $table->primary('ktp_pembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembeli2s');
    }
}
