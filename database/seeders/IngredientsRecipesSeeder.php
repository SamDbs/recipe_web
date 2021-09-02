<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientsRecipes;

class IngredientsRecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IngredientsRecipes::factory()
            ->count(1)
            ->create();
    }
}
