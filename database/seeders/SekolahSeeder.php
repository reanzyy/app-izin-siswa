<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::insert([
                'nama_sekolah' => 'SMKN 1 KOTA CIREBON',
                'alamat_sekolah' => 'Jl. Perjuangan, Karyamulya, Kec. Kesambi, Kota Cirebon, Jawa Barat 45135',
                'telepon_sekolah' => '(0231) 480202'
            ]);
    }
}
