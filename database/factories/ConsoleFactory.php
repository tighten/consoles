<?php

namespace Database\Factories;

use App\Console;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'url' => $this->faker->url,
        ];
    }
}
