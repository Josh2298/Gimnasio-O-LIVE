<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'userclient_id' => $this->faker->numberBetween(1,10),
            'pago_e'=> $this->faker->numberBetween(20,50),
            'pago_qr' => $this->faker->numberBetween(20,50),
            'fecha_venta' => $this->faker->date()
        ];
    }
}
