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
        $rating = [1.5,2,2.5,3,3.5,4,4.5,5];
        $categories = ['kalimantan' , 'jakarta' , 'sumatra' , 'papua' ,'sulawesi'];
        return [
            'image' => "https://picsum.photos/id/" . fake()->numberBetween(1, 200) . "/640/" . floor(640 * 1.414),
            'name'  => fake()->firstName(),
            // 'city_id' =>  fake()->numberBetween(1,5),
            'city' => $categories[fake()->numberBetween(0,4)],
            'description' => fake()->paragraph(2),
            'duration' => fake() -> numberBetween(10,90), 
            'rating' => $rating[fake()->numberBetween(0,7)],
        ];
    }
}
