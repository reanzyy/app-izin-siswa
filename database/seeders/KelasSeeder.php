<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_kelas' => 'X DPIB-1', 'id_jurusan' => 1],
            ['nama_kelas' => 'X DPIB-2', 'id_jurusan' => 1],
            ['nama_kelas' => 'X DPIB-3', 'id_jurusan' => 1],
            ['nama_kelas' => 'X DPIB-4', 'id_jurusan' => 1],
            ['nama_kelas' => 'X TEI-1', 'id_jurusan' => 2],
            ['nama_kelas' => 'X TEI-2', 'id_jurusan' => 2],
            ['nama_kelas' => 'X TEI-3', 'id_jurusan' => 2],
            ['nama_kelas' => 'X TITL-1', 'id_jurusan' => 3],
            ['nama_kelas' => 'X TITL-2', 'id_jurusan' => 3],
            ['nama_kelas' => 'X TITL-3', 'id_jurusan' => 3],
            ['nama_kelas' => 'X TPTU-1', 'id_jurusan' => 4],
            ['nama_kelas' => 'X TOI-1', 'id_jurusan' => 5],
            ['nama_kelas' => 'X TOI-2', 'id_jurusan' => 5],
            ['nama_kelas' => 'X TPM-1', 'id_jurusan' => 6],
            ['nama_kelas' => 'X TPM-2', 'id_jurusan' => 6],
            ['nama_kelas' => 'X TPM-3', 'id_jurusan' => 6],
            ['nama_kelas' => 'X TKRO-1', 'id_jurusan' => 7],
            ['nama_kelas' => 'X TKRO-2', 'id_jurusan' => 7],
            ['nama_kelas' => 'X TKRO-3', 'id_jurusan' => 7],
            ['nama_kelas' => 'X TBKR-1', 'id_jurusan' => 8],
            ['nama_kelas' => 'X PPLG-1', 'id_jurusan' => 9],
            ['nama_kelas' => 'X PPLG-1', 'id_jurusan' => 9],
            ['nama_kelas' => 'X TJKT-1', 'id_jurusan' => 10],
            ['nama_kelas' => 'X TJKT-2', 'id_jurusan' => 10],
            ['nama_kelas' => 'XI DPIB-1', 'id_jurusan' => 1],
            ['nama_kelas' => 'XI DPIB-2', 'id_jurusan' => 1],
            ['nama_kelas' => 'XI DPIB-3', 'id_jurusan' => 1],
            ['nama_kelas' => 'XI DPIB-4', 'id_jurusan' => 1],
            ['nama_kelas' => 'XI TEI-1', 'id_jurusan' => 2],
            ['nama_kelas' => 'XI TEI-2', 'id_jurusan' => 2],
            ['nama_kelas' => 'XI TEI-3', 'id_jurusan' => 2],
            ['nama_kelas' => 'XI TEI-4', 'id_jurusan' => 2],
            ['nama_kelas' => 'XI TITL-1', 'id_jurusan' => 3],
            ['nama_kelas' => 'XI TITL-2', 'id_jurusan' => 3],
            ['nama_kelas' => 'XI TITL-3', 'id_jurusan' => 3],
            ['nama_kelas' => 'XI TPTU-1', 'id_jurusan' => 4],
            ['nama_kelas' => 'XI TOI-1', 'id_jurusan' => 5],
            ['nama_kelas' => 'XI TPM-1', 'id_jurusan' => 6],
            ['nama_kelas' => 'XI TPM-2', 'id_jurusan' => 6],
            ['nama_kelas' => 'XI TPM-3', 'id_jurusan' => 6],
            ['nama_kelas' => 'XI TKR-1', 'id_jurusan' => 7],
            ['nama_kelas' => 'XI TKR-2', 'id_jurusan' => 7],
            ['nama_kelas' => 'XI TKR-3', 'id_jurusan' => 7],
            ['nama_kelas' => 'XI TKR-4', 'id_jurusan' => 7],
            ['nama_kelas' => 'XI RPL-1', 'id_jurusan' => 9],
            ['nama_kelas' => 'XI RPL-2', 'id_jurusan' => 9],
            ['nama_kelas' => 'XI TKJ-1', 'id_jurusan' => 10],
            ['nama_kelas' => 'XI TKJ-2', 'id_jurusan' => 10],
            ['nama_kelas' => 'XII DPIB-1', 'id_jurusan' => 1],
            ['nama_kelas' => 'XII DPIB-2', 'id_jurusan' => 1],
            ['nama_kelas' => 'XII DPIB-3', 'id_jurusan' => 1],
            ['nama_kelas' => 'XII DPIB-4', 'id_jurusan' => 1],
            ['nama_kelas' => 'XII TEI-1', 'id_jurusan' => 2],
            ['nama_kelas' => 'XII TEI-2', 'id_jurusan' => 2],
            ['nama_kelas' => 'XII TEI-3', 'id_jurusan' => 2],
            ['nama_kelas' => 'XII TEI-4', 'id_jurusan' => 2],
            ['nama_kelas' => 'XII TITL-1', 'id_jurusan' => 3],
            ['nama_kelas' => 'XII TITL-2', 'id_jurusan' => 3],
            ['nama_kelas' => 'XII TITL-3', 'id_jurusan' => 3],
            ['nama_kelas' => 'XII TPTU-1', 'id_jurusan' => 4],
            ['nama_kelas' => 'XII TOI-1', 'id_jurusan' => 5],
            ['nama_kelas' => 'XII TPM-1', 'id_jurusan' => 6],
            ['nama_kelas' => 'XII TPM-2', 'id_jurusan' => 6],
            ['nama_kelas' => 'XII TPM-3', 'id_jurusan' => 6],
            ['nama_kelas' => 'XII TKR-1', 'id_jurusan' => 7],
            ['nama_kelas' => 'XII TKR-2', 'id_jurusan' => 7],
            ['nama_kelas' => 'XII TKR-3', 'id_jurusan' => 7],
            ['nama_kelas' => 'XII TKR-4', 'id_jurusan' => 7],
            ['nama_kelas' => 'XII RPL-1', 'id_jurusan' => 9],
            ['nama_kelas' => 'XII RPL-2', 'id_jurusan' => 9],
            ['nama_kelas' => 'XII TKJ-1', 'id_jurusan' => 10],
            ['nama_kelas' => 'XII TKJ-2', 'id_jurusan' => 10],
            ['nama_kelas' => 'XIII TOI-1', 'id_jurusan' => 5],
        ];

        foreach ($data as $value) {
            Kelas::insert([
                'nama_kelas' => $value['nama_kelas'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_jurusan' => $value['id_jurusan']
            ]);
        }
    }
}
