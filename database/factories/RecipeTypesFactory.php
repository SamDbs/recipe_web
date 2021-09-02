<?php

namespace Database\Factories;

use App\Models\RecipeTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeTypesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecipeTypes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recipe_id' => 1,
            'type_id' => 1,
        ];
    }
}
