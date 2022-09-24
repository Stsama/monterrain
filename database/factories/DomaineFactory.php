<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domaine>
 */
class DomaineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'region'=>$this->faker->country,
            'ville'=>$this->faker->city,
            'quartier'=>$this->faker->streetName,
            'superficie'=>$this->faker->numberBetween(300,20000),
            'prix'=>$this->faker->numberBetween(1000000,100000000),
            'proprio'=>$this->faker->unique()->lastName,
            'description'=>$this->faker->paragraph
        ];
    }
}
