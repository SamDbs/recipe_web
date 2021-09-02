<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecipeSteps;

class RecipeStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecipeSteps::factory()
            ->count(1)
            ->create();
    }
}
