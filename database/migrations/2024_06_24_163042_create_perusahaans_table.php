<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan')->nullable();
            $table->string('lokasi_perusahaan')->nullable();
            $table->text('deskripsi_perusahaan')->nullable();
            $table->string('bidang_industri')->nullable();
            $table->string('website_perusahaan')->nullable();
            $table->string('kontak_perusahaan')->nullable();
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
        Schema::dropIfExists('perusahaan');
    }
}
