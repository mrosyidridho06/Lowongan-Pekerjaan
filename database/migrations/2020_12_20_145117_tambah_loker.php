<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahLoker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_loker', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('bidang');
            $table->string('bagian');
            $table->integer('no_perusahaan');
            $table->string('berlaku');
            $table->string('kadaluarsa');
            $table->string('lokasi');
            $table->string('email');
            $table->integer('no_telp');
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
        //
    }
}
