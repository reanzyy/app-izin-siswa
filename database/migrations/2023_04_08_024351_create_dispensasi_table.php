<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dispensasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            // $table->foreignId('id_kelas')->constrained('kelas');
            // $table->foreignId('id_jurusan')->constrained('jurusan');
            // $table->foreignId('jam_mulai')->constrained('jam_pelajaran');
            // $table->foreignId('jam_kembali')->constrained('jam_pelajaran');
            // $table->unsignedBigInteger('id_kelas');
            // $table->unsignedBigInteger('id_jurusan');
            // $table->unsignedBigInteger('jam_mulai');
            // $table->unsignedBigInteger('jam_kembali');
            $table->text('keperluan');
            $table->string('email');
            $table->string('plat_no');
            $table->dateTime('waktu_input');
            $table->tinyInteger('status');
            $table->timestamps();

            // $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            // $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan');
            // $table->foreign('jam_mulai')->references('id_jp')->on('jam_pelajaran');
            // $table->foreign('jam_kembali')->references('id_jp')->on('jam_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispensasi');
    }
};
