<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\opening_hours>
 */
class opening_hoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = $this->faker->date();
        return [
            'start_at' => $this->faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'duration' => $this->faker->unique()->randomElement([1,2,3,4,5,6,7,8]),
            'day' => $date,
            'field_id' => 1,
        ];
    }
}
