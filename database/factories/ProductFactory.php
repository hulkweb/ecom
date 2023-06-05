<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'price'=>rand(100,10000),
            'qty'=>10,
            'details'=>$this->faker->text(200),
            'image'=>$this->faker->imageUrl(500,500),
            'category_id'=>rand(1,3)


        ];
    }
}
