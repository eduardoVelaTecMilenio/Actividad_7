<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'materialDidactico'=>$this->faker->paragraph(),
            'kitDeRobotica'=>$this->faker->numberBetween(0, 10),
            'grupo'=>$this->faker->numberBetween(0, 10),
            'profesor'=>$this->faker->numberBetween(0, 10),
        ];
    }
}
