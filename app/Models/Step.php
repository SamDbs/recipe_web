<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    public function recipes()
    {
        return $this->hasManyThrough(Recipe::class, RecipeSteps::class);
    }
}
