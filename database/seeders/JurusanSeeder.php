<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            ['nama_jurusan' => 'DPIB - Desain Pemodelan dan Informasi Pembangunan'],
            ['nama_jurusan' => 'TEI - Teknik Elektronika Industri'],
            ['nama_jurusan' => 'TITL - Teknik Instalasi Tenaga Listrik'],
            ['nama_jurusan' => 'TPTUP - Teknik Pemanasan, Tata Udara dan Pendinginan'],
            ['nama_jurusan' => 'TOI - Teknik Otomasi Industri'],
            ['nama_jurusan' => 'TPM - Teknik Pemesinan'],
            ['nama_jurusan' => 'TKRO - Teknik Kendaraan Ringan dan Otomotif'],
            ['nama_jurusan' => 'TBKR - Teknik Body Kendaraan Ringan'],
            ['nama_jurusan' => 'RPL - Rekayasa Perangkat Lunak'],
            ['nama_jurusan' => 'TKJ - Teknik Komputer dan Jaringan']
        ];

        foreach ($jurusan as $value) {
            Jurusan::insert([
                'nama_jurusan' => $value['nama_jurusan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
