<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    protected $ingredients;

    public function __construct(Ingredient $ingredients){
        $this->ingredients = $ingredients;
    }

    public function index()
    {
        $ingredients = Ingredient::all();

        return view('recipes.recipes', [
            'ingredient' => $ingredients
        ]);
    }
}
