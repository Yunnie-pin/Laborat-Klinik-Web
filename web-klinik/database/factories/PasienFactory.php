<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->datetime(),
            'jenis_identitas' => fake()->randomElement(['KTP', 'SIM', 'PASSPORT']),
            'jenis_kelamin' =>fake()->randomElement(['L','P']),
            'no_identitas'=>fake()->numerify('#############'),
            'no_telp'=>'08123xxxxxx',
            'bpjs'=>fake()->numerify('############'),
            'alamat' => fake()->address()
        ];
    }
}
