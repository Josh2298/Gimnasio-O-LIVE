<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'precio_compra'=>$this->faker->numberBetween(1,20),
            'precio_venta'=>$this->faker->numberBetween(1,20),
            'cantidad_min'=>$this->faker->numberBetween(1,20),
            'stock'=>$this->faker->numberBetween(1,20),
            'categoria_id'=>$this->faker->numberBetween(1,15)
        ];
    }
}
