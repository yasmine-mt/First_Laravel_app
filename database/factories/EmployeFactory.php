<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'registration_number' => $this->faker->numberBetween(),
            'fullname' => $this->faker->unique()->name(),
            'depart' => $this->faker->word(),
            'hire_date' => $this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
        ];
    }
}
