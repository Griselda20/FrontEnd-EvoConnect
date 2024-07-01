<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tingkat_pendidikan')->nullable();
            $table->string('jurusan')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamp('tanggal_mulai')->nullable();
            $table->timestamp('tanggal_selesai')->nullable();
            $table->string('institusi')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan');
    }
}
