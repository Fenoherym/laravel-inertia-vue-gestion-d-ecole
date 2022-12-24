<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "first_name" => $this->faker->firstName(),
            "numInscription" => $this->faker->phoneNumber(),
            "birthday" => $this->faker->date(),
            "adresse" => $this->faker->address,
            "tel" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "level_id" => random_int(1, 5),
            "school_year_id" => random_int(1, 2)

        ];
    }
}
