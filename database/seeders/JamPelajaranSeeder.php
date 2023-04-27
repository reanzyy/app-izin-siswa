<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\JamPelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JamPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['jam' => '1 (07:00-07:40)'],
            ['jam' => '2 (07:40-08:20)'],
            ['jam' => '3 (08:20-09:00)'],
            ['jam' => 'Istirahat ke-1 (09:00-09:30)'],
            ['jam' => '4 (09:30-10:10)'],
            ['jam' => '5 (10:10-10:50)'],
            ['jam' => '6 (10:50-11:30)'],
            ['jam' => 'Istirahat ke-2 (11:30-12:30)'],
            ['jam' => '7 (12:30-13:10)'],
            ['jam' => '8 (13:10-13:50)'],
            ['jam' => '9 (13:50-14:30)'],
            ['jam' => '10 (14:30-15:10)'],
            ['jam' => '11 (15:10-15:50'],
            ['jam' => '12 (15:50-16:30)'],
            ['jam' => 'Tidak Kembali ke Sekolah']
        ];

        foreach ($data as $value) {
            JamPelajaran::insert([
                'jam' => $value['jam'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
