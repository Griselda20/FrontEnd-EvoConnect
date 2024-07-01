<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('role')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->timestamp('tanggal_bergabung')->nullable();
            $table->timestamp('tanggal_berakhir')->nullable();
            $table->text('deskripsi_pekerjaan')->nullable();
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
        Schema::dropIfExists('pengalaman_kerja');
    }
}
