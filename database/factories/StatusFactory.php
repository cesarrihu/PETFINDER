<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;

class StatusFactory extends Factory
{
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['No Adoptado', 'Adoptado']), // Define cómo se generará el status
        ];
    }
}


