<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecipeTypes;

class RecipeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecipeTypes::factory()
            ->count(1)
            ->create();
    }
}
