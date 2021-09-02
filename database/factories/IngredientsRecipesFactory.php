<?php

namespace Database\Factories;

use App\Models\IngredientsRecipes;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientsRecipesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IngredientsRecipes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => '200',
            'measure_unit' => 'grammes',
            'recipe_id' => 1,
            'ingredient_id' => 1,
        ];
    }
}
