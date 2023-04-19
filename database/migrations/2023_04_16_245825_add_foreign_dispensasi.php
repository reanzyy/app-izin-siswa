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
        Schema::table('dispensasi', function (Blueprint $table) {
            $table->foreignId('id_kelas')->constrained('kelas');
            $table->foreignId('id_jurusan')->constrained('jurusan');
            $table->foreignId('jam_mulai')->constrained('jam_pelajaran');
            $table->foreignId('jam_kembali')->constrained('jam_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dispensasi', function (Blueprint $table) {
            //
        });
    }
};