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
        Schema::table('cetak', function (Blueprint $table) {
            $table->foreignId('sekolah_id')->constrained('sekolah');
            $table->foreignId('no_d')->constrained('dispensasi');
            $table->foreignId('id_guru')->constrained('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cetak', function (Blueprint $table) {
            //
        });
    }
};