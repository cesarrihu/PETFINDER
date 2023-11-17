<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublicacionFactory extends Factory
{
    public function definition(): array
    {
    return [
        'nombre' =>$this->faker->word(),
        'raza' => $this->faker->word(),
        'descripcion' => $this->faker->paragraph(),
        'edad' => $this->faker->numberBetween(1, 15),
        'color' => $this->faker->safeColorName(),
        'tipo' => $this->faker->randomElement(['canino', 'felino']),
    ];
    }
}
