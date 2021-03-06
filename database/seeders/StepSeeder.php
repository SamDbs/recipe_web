<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Step::factory()
            ->count(1)
            ->has(Recipe::factory()->count(1))
            ->create();
    }
}
