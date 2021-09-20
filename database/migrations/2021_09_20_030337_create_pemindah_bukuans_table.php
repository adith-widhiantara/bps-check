<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemindahBukuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemindah_bukuans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->unique();
            $table->string('nama')->nullable();
            $table->string('npwp')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('petugas')->nullable();
            $table->date('jatuh_tempo')->nullable();
            $table->integer('hari_ke')->nullable();
            $table->string('nomor_lap')->nullable();
            $table->date('tanggal_lap')->nullable();
            $table->string('nomor_bukti_pbk')->nullable();
            $table->date('tanggal_bukti_pbk')->nullable();
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
        Schema::dropIfExists('pemindah_bukuans');
    }
}
