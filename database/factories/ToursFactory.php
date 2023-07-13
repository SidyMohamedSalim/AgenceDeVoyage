<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ToursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>$this->faker->sentence(10,6),
            'description'=>$this->faker->sentences(6,true),
            'country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'address'=>$this->faker->address(),
            'price'=>$this->faker->numberBetween(100,1000),
            'distance'=>$this->faker->numberBetween(200,500),
            'rating'=>$this->faker->randomFloat(2,0,5),
            'available'=>true,
            'image'=>$this->faker->imageUrl()
            ];
    }
}
