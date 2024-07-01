<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaranKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaran_kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->nullable();
            $table->integer('id_lowongan')->nullable();
            $table->integer('id_admin')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('status')->nullable()->comment('Sudah melamar;Sedang ditinjau;Wawancara;Diterima;Ditolak;Mengundurkan diri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamaran_kerja');
    }
}
