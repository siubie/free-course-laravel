<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiodataMahasiswa>
 */
class BiodataMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('##########'),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Mesin']),
            'nomor_telepon' => $this->faker->phoneNumber(),
        ];
    }
}
