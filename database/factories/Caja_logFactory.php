<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caja_log>
 */
class Caja_logFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ingreso'=> $this->faker->numberBetween(0,20),
            'egreso'=> $this->faker->numberBetween(0,20),
            'descripcion'=> fake()->word(),
            'fecha'=> fake()->date(),
            'caja_id'=>$this->faker->numberBetween(1,15),
        ];
    }
}
