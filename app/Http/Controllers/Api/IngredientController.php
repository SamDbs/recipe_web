<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    protected $ingredients;

    public function __construct(Ingredient $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function index()
    {
        $ingredients = Ingredient::all();

        return $ingredients;
    }

    public function show($id)
    {
        $ingredient = Ingredient::where('id', $id)->first();

        return $ingredient;
    }

    public function edit($id)
    {
//       edit method
    }

    public function delete($id)
    {
//    softdelete method
    }
}
