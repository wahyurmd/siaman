<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan')->primary();
            $table->unsignedBigInteger('nip');
            $table->unsignedBigInteger('nisn');
            $table->unsignedInteger('id_kelas');
            $table->text('kronologi');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('guru');
            $table->foreign('nisn')->references('nisn')->on('siswa');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
