<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PendaftaranBansos>
 */
class PendaftaranBansosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => $this->faker->unique()->randomNumber('7', true),
            'no_kk' => $this->faker->unique()->randomNumber('7', true),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'pendapatan' => $this->faker->numberBetween('1000000', '10000000'),
            'jumlah_tanggungan' => $this->faker->numberBetween('1', '8'),
        ];
    }
}
