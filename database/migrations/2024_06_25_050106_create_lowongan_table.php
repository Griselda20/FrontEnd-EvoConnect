<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perusahaan')->length(11);
            $table->string('judul_lowongan', 255);
            $table->integer('status_lowongan')->length(11);
            $table->text('detail_pekerjaan');
            $table->dateTime('tanggal_dibuka');
            $table->dateTime('tanggal_ditutup');
            $table->text('lokasi');
            $table->enum('kategori', ['partime', 'fulltime', 'remote', 'magang', 'hibrid']);
            $table->integer('min_usia')->length(11);
            $table->integer('maks_usia')->length(11);
            $table->string('sistem_kerja');
            $table->timestamps();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->integer('min_gaji')->length(11);
            $table->integer('maks_gaji')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongan');
    }
}
