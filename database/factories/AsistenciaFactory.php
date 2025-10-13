<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ingreso'=>fake()->date(),
            'casillero'=>$this->faker->numberBetween(1,28),
            'hora_ing'=>fake()->time(),
            'hora_sal'=>fake()->time(),
            'rol'=>fake()->word(),
            'limpieza'=>fake()->word(),
            'user_id'=>$this->faker->numberBetween(1,15)
        ];
    }
}
