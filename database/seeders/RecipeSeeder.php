<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Step;
use App\Models\Type;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::factory()
            ->count(1)
            ->has(Ingredient::factory()->count(1))
            ->has(Step::factory()->count(1))
            ->has(Type::factory()->count(1))
            ->create();
    }
}
