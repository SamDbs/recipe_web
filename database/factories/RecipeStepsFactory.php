<?php

namespace Database\Factories;

use App\Models\RecipeSteps;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeStepsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecipeSteps::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => "explication de l'étape 1",
            'recipe_id' => 1,
            'step_id' => 1,
        ];
    }
}
