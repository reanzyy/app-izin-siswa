<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\JamPelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        JamPelajaran::factory(10)->create();
        Jurusan::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Adriansyah Suryawan',
        //     'email' => 'suryawanadriansyah4@gmail.com',
        //     'password' => 'password',
        // ]);

        // JamPelajaran::factory()->create([
        //     [
        //         'jam' => '1 (07:00-07:40)',
        //     ],
        //     [
        //         'jam' => '2 (07:40-08:20)',
        //     ],
        //     [
        //         'jam' => '3 (08:20-09:00)',
        //     ],
        //     [
        //         'jam' => 'Istirahat ke-1 (09:00-09:30)',
        //     ],
        //     [
        //         'jam' => '4 (09:30-10:10)',
        //     ],
        //     [
        //         'jam' => '5 (10:10-10:50)',
        //     ],
        //     [
        //         'jam' => '6 (10:50-11:30)',
        //     ],
        //     [
        //         'jam' => 'Istirahat ke-2 (11:30-12:30)',
        //     ],
        //     [
        //         'jam' => '7 (12:30-13:10)',
        //     ],
        //     [
        //         'jam' => '8 (13:10-13:50)',
        //     ],
        //     [
        //         'jam' => '9 (13:50-14:30)',
        //     ],
        //     [
        //         'jam' => '10 (14:30-15:10)',
        //     ],
        //     [
        //         'jam' => '11 (15:10-15:50)',
        //     ],
        //     [
        //         'jam' => '12 (15:50-16:30',
        //     ],
        //     [
        //         'jam' => 'Tidak Kembali ke Sekolah',
        //     ]
        // ]);

        // Jurusan::factory()->create([
        //     [
        //         'nama_jurusan' => 'DPIB - Desain Pemodelan dan Informasi Pembangunan'
        //     ],
        //     [
        //         'nama_jurusan' => 'TEI - Teknik Elektronika Industri'
        //     ],
        //     [
        //         'nama_jurusan' => 'TITL - Teknik Instalasi Tenaga Listrik'
        //     ],
        //     [
        //         'nama_jurusan' => 'TPTUP - Teknik Pemanasan, Tata Udara dan Pendinginan'
        //     ],
        //     [
        //         'nama_jurusan' => 'TOI - Teknik Otomasi Industri'
        //     ],
        //     [
        //         'nama_jurusan' => 'TPM - Teknik Pemesinan'
        //     ],
        //     [
        //         'nama_jurusan' => 'TKRO - Teknik Kendaraan Ringan dan Otomotif'
        //     ],
        //     [
        //         'nama_jurusan' => 'TBKR - Teknik Body Kendaraan Ringan'
        //     ],
        //     [
        //         'nama_jurusan' => 'RPL - Rekayasa Perangkat Lunak'
        //     ],
        //     [
        //         'nama_jurusan' => 'TKJ - Teknik Komputer dan Jaringan'
        //     ],
        // ]);
    }
}
