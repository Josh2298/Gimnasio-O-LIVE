<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membresia>
 */
class MembresiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plan'=>fake()->word(),
            'monto'=>$this->faker->numberBetween(1,20),
            'fecha_ini'=>fake()->date(),
            'fecha_fin'=>fake()->date(),
            'estado'=>fake()->word(),
            'detalle'=>fake()->word(),
            'disciplina'=>fake()->word(),
            'ext_ini'=>fake()->date(),
            'ext_fin'=>fake()->date(),
            'detalle_ext'=>fake()->word(),
            'user_id'=>$this->faker->numberBetween(1,15)
        ];
    }
}
