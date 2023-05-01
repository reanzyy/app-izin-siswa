<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SekolahSeeder::class,
            JurusanSeeder::class,
            KelasSeeder::class,
            JamPelajaranSeeder::class
        ]);
    }
}