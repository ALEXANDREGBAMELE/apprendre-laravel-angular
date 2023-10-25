<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $active = $this->faker->randomElement([true,false]);
        return [
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(200, 100, 1000),
            'active' => $active,
        ];
    }
}
