<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age'=> fake()->unique()->randomNumber(),
            'id_number' =>fake()->unique()->randomNumber(),
            'salary'=> fake()->unique()->randomNumber(),
            'phone_number'=> fake()->unique()->randomNumber(8),
        ];
    }
}

