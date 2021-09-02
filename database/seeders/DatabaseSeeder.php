<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IngredientSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            RecipeSeeder::class,
            StepSeeder::class,
            TypeSeeder::class,
            IngredientsRecipesSeeder::class,
            RecipeStepsSeeder::class,
            RecipeTypesSeeder::class
        ]);
    }
}
