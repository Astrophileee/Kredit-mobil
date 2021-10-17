<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->string('kode_mobil',20)->unique();
            $table->string('nama',50);
            $table->string('merk',50);
            $table->string('type',50);
            $table->string('warna',50);
            $table->double('harga_mobil',20);
            $table->string('image',255);
            $table->timestamps();

            $table->primary('kode_mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}
