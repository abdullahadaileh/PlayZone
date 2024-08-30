<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\booking>
 */
class bookingFactory extends Factory
{
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            return [
                'start_time' => $this->faker->time(),
                'end_time' => $this->faker->time(),
                'total_price' => $this->faker->randomFloat(2, 20, 90),
                'status' => $this->faker->randomElement(['confirmed', 'pending', 'cancelled']),
                'start_date' => $this->faker->date(),
                'end_date' => $this->faker->date(),
                'user_id' => fake()->numberBetween($min = 1, $max = 10),
                'field_id' => fake()->numberBetween($min = 1, $max = 22),
            ];
        }
    }
    
