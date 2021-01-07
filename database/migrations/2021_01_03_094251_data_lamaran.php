<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataLamaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lamaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_pencari_id');
            $table->foreign('owner_pencari_id')->references('id')->on('user_pencari')->onDelete('cascade');
            $table->unsignedBigInteger('owner_lowongan_id');
            $table->foreign('owner_lowongan_id')->references('id')->on('tambah_loker')->onDelete('cascade');
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
