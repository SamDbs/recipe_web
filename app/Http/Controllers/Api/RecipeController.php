<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    protected $recipes;

    public function __construct(Recipe $recipes){
        $this->recipes = $recipes;
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
}
