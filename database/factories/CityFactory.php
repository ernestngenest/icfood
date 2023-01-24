<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = ['kalimantan' , 'jakarta' , 'sumatra' , 'papua' ,'sulawesi'];
        return [
            'name' =>  $categories[fake()->numberBetween(0,4)],
        ];
    }
}
