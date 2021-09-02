<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::factory()
            ->count(1)
            ->has(Recipe::factory()->count(1))
            ->create();
    }
}
