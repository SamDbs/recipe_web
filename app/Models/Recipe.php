<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->hasManyThrough(Ingredient::class, IngredientsRecipes::class);
    }

    public function steps()
    {
        return $this->hasManyThrough(Step::class, RecipeSteps::class);
    }

    public function types()
    {
        return $this->hasManyThrough(Type::class, RecipeTypes::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
