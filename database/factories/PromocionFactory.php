<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocion>
 */
class PromocionFactory extends Factory
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
            '1persona'=>$this->faker->numberBetween(120,140),
            '2persona'=>$this->faker->numberBetween(110,130),
            '3persona'=>$this->faker->numberBetween(100,120),
            'medio_mes'=>$this->faker->numberBetween(75,85),
            'trimestral'=>$this->faker->numberBetween(300,360),
            'semestral'=>$this->faker->numberBetween(360,600),
            'zumba'=>$this->faker->numberBetween(80,90),
            'medio_z'=>$this->faker->numberBetween(50,60)
        ];
    }
}
