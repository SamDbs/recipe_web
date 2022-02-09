<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\RecipeSteps;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    protected $recipe;

    public function __construct(Recipe $recipe){
        $this->recipe = $recipe;
    }

    public function index()
    {
        $recipes = Recipe::all();

        return $recipes;
    }

    public function show($id)
    {
        $recipe = Recipe::where('id', $id)->first();

        return $recipe;
    }

    public function insert()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return
     */
    public function destroy($id)
    {
        //
    }

    public function getAllStepsByRecipe($id)
    {
        // steps where recipe id is the param
        $recipeSteps = RecipeSteps::where('recipe_id', $id)->get();

        return $recipeSteps;
    }
}
