<?php

namespace App\Http\Controllers;

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

        return response()->json($recipes);
    }

    public function show($id)
    {
        //
    }

    public function create()
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
