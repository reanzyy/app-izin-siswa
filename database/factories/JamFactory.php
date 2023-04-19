<?php

namespace Database\Factories;

use App\Models\JamPelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class JamPelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = JamPelajaran::class;


    public function definition(): array
    {
        return [
            'jam' => $this->faker->sentence()
        ];
    }
}
