<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historial_corporal>
 */
class Historial_corporalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,15),
            'fecha'=>fake()->date(),
            'edad'=>$this->faker->numberBetween(1,30),
            'estatura'=>$this->faker->numberBetween(1,5),
            'peso'=>$this->faker->numberBetween(1,100),
            'hombro'=>$this->faker->numberBetween(1,100),
            'pecho_rep'=>$this->faker->numberBetween(1,100),
            'pecho_cont'=>$this->faker->numberBetween(1,100),
            'espalda_rep'=>$this->faker->numberBetween(1,100),
            'espalda_cont'=>$this->faker->numberBetween(1,100),
            'brazo_d_rep'=>$this->faker->numberBetween(1,100),
            'brazo_d_cont'=>$this->faker->numberBetween(1,100),
            'brazo_i_rep'=>$this->faker->numberBetween(1,100),
            'brazo_i_cont'=>$this->faker->numberBetween(1,100),
            'cintura'=>$this->faker->numberBetween(1,100),
            'cadera'=>$this->faker->numberBetween(1,100),
            'muslo_d_rep'=>$this->faker->numberBetween(1,100),
            'muslo_d_cont'=>$this->faker->numberBetween(1,100),
            'muslo_i_rep'=>$this->faker->numberBetween(1,100),
            'muslo_i_cont'=>$this->faker->numberBetween(1,100),
            'panto_d_rep'=>$this->faker->numberBetween(1,100),
            'panto_d_cont'=>$this->faker->numberBetween(1,100),
            'panto_i_rep'=>$this->faker->numberBetween(1,100),
            'panto_i_cont'=>$this->faker->numberBetween(1,100)
        ];
    }
}
