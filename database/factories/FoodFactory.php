<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $number = rand(1, 5);
        return [
            'name' => $this->faker->name,
            'count' => $this->faker->randomNumber(2),
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->randomNumber(2),
            'created_at' => now(),
        ];
    }
}
