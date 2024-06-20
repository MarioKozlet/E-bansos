<?php

namespace Database\Factories;

use App\Models\PendaftaranBansos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

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
        $faker =  FakerFactory::create('id_ID');
        return [
            'nik' => $faker->nik(),
            'no_kk' => $faker->unique()->randomNumber('17', true),
            'nama' => $faker->name(),
            'alamat' => $faker->address(),
            'pendapatan' => $faker->numberBetween('1000000', '10000000'),
            'jumlah_tanggungan' => $faker->numberBetween('1', '8'),
        ];
    }

}
