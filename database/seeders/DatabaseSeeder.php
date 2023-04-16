<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Adriansyah Suryawan',
            'email' => 'suryawanadriansyah4@gmail.com',
            'password' => 'password',
        ]);

        // \App\Models\JamPelajaran::factory()->create([
        //     [
        //         'id' => '1',
        //         'jam' => '1 (07:00-07:40)',
        //     ],
        //     [
        //         'id' => '2',
        //         'jam' => '2 (07:40-08:20)',
        //     ],
        //     [
        //         'id' => '3',
        //         'jam' => '3 (08:20-09:00)',
        //     ],
        //     [
        //         'id' => '4',
        //         'jam' => 'Istirahat ke-1 (09:00-09:30)',
        //     ],
        //     [
        //         'id' => '5',
        //         'jam' => '4 (09:30-10:10)',
        //     ],
        //     [
        //         'id' => '6',
        //         'jam' => '5 (10:10-10:50)',
        //     ],
        //     [
        //         'id' => '7',
        //         'jam' => '6 (10:50-11:30)',
        //     ],
        //     [
        //         'id' => '8',
        //         'jam' => 'Istirahat ke-2 (11:30-12:30)',
        //     ],
        //     [
        //         'id' => '9',
        //         'jam' => '7 (12:30-13:10)',
        //     ],
        //     [
        //         'id' => '10',
        //         'jam' => '8 (13:10-13:50)',
        //     ],
        //     [
        //         'id' => '11',
        //         'jam' => '9 (13:50-14:30)',
        //     ],
        //     [
        //         'id' => '12',
        //         'jam' => '10 (14:30-15:10)',
        //     ],
        //     [
        //         'id' => '13',
        //         'jam' => '11 (15:10-15:50)',
        //     ],
        //     [
        //         'id' => '14',
        //         'jam' => '12 (15:50-16:30',
        //     ],
        //     [
        //         'id' => '15',
        //         'jam' => 'Tidak Kembali ke Sekolah',
        //     ]
        // ]);

        // \App\Models\Jurusan::factory()->create([
        //     [
        //         'id' => '1',
        //         'nama_jurusan' => 'DPIB - Desain Pemodelan dan Informasi Pembangunan'
        //     ],
        //     [
        //         'id' => '2',
        //         'nama_jurusan' => 'TEI - Teknik Elektronika Industri'
        //     ],
        //     [
        //         'id' => '3',
        //         'nama_jurusan' => 'TITL - Teknik Instalasi Tenaga Listrik'
        //     ],
        //     [
        //         'id' => '4',
        //         'nama_jurusan' => 'TPTUP - Teknik Pemanasan, Tata Udara dan Pendinginan'
        //     ],
        //     [
        //         'id' => '5',
        //         'nama_jurusan' => 'TOI - Teknik Otomasi Industri'
        //     ],
        //     [
        //         'id' => '6',
        //         'nama_jurusan' => 'TPM - Teknik Pemesinan'
        //     ],
        //     [
        //         'id' => '7',
        //         'nama_jurusan' => 'TKRO - Teknik Kendaraan Ringan dan Otomotif'
        //     ],
        //     [
        //         'id' => '8',
        //         'nama_jurusan' => 'TBKR - Teknik Body Kendaraan Ringan'
        //     ],
        //     [
        //         'id' => '9',
        //         'nama_jurusan' => 'RPL - Rekayasa Perangkat Lunak'
        //     ],
        //     [
        //         'id' => '10',
        //         'nama_jurusan' => 'TKJ - Teknik Komputer dan Jaringan'
        //     ],
        // ]);
    }
}
