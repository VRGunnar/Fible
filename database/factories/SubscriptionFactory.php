<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'description' => $this->faker->catchPhrase(),      
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10),  
            'logo' => $this->faker->imageUrl($width = 640, $height = 480),
            'duration' => $this->faker->numberBetween($min = 604800, $max = 2592000),
            'used_count' => $this->faker->numberBetween($min = 0, $max = 100),        
        ];
    }
}
