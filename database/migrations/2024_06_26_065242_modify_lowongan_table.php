<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lowongan', function (Blueprint $table) {
            $table->dropColumn('sistem_kerja');
            $table->string('kota', 255)->after('detail_pekerjaan');
            $table->string('job_kategori', 50)->after('kategori');
            $table->renameColumn('kategori', 'sistem_kerja');
            $table->integer('id_admin')->length(11)->after('maks_gaji');
            $table->integer('min_pengalaman')->length(11)->after('id_admin');
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
