<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyLamarankerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lamaran_kerja', function (Blueprint $table) {
            $table->text('alasan_bergabung')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lamaran_kerja', function (Blueprint $table) {
            $table->dropColumn('alasan_bergabung');
        });
    }
}
