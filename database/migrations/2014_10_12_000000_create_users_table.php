<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username', 25)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->timestamp('tempat_tanggal_lahir')->nullable();
            $table->string('domisili')->nullable();
            $table->text('cv')->nullable();
            $table->text('dokumen_pendukung')->nullable();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
