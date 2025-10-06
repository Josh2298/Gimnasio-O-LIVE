<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cantidad'=>$this->faker->numberBetween(1,10),
            'precio'=>$this->faker->numberBetween(1,20),
            'detalle'=>fake()->word(),
            'producto_id'=>$this->faker->numberBetween(1,15),
            'promocion_id'=>$this->faker->numberBetween(1,15),
            'venta_id'=>$this->faker->numberBetween(1,15)
        ];
    }
}
