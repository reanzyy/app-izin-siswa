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
        Schema::create('cetak', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_sekolah')->constrained('sekolah');
            // $table->foreignId('no_d')->constrained('dispensasi');
            // $table->unsignedBigInteger('id_sekolah');
            // $table->unsignedBigInteger('no_d');
            $table->date('waktu_cetak');
            // $table->foreignId('id_guru')->constrained('guru');
            // $table->unsignedBigInteger('id_guru');

            // $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah');
            // $table->foreign('no_d')->references('no_d')->on('dispensasi');
            // $table->foreign('id_guru')->references('id_guru')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cetak');
    }
};
