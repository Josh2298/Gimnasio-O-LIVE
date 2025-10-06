<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caja>
 */
class CajaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->word(),
            'descripcion'=>fake()->word(),
            'utilidad'=>$this->faker->numberBetween(0,20),
            'saldo'=>$this->faker->numberBetween(0,20)
        ];
    }
}
