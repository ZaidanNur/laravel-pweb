<?php

namespace Database\Factories;

use App\Models\Fruit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fruit>
 */
class FruitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Fruit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price'=> $this->faker->numberBetween(100,10000),
            'description'=> $this->faker->realText(rand(10, 20))
        ];
    }
}
