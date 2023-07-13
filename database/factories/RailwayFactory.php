<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railway>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "azienda" => fake()->word(),
            "stazione_di_partenza" => fake()->city(),
            "stazione_di_arrivo" => fake()->city(),
            "orario_di_partenza" => fake()->date(),
            "orario_di_arrivo" => fake()->date(),
            "codice_treno" => fake()->numerify()
        ];
    }
}
