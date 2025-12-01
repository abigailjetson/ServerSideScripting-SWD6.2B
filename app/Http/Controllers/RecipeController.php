<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    // Display a listing of recipes
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    // Show form for creating a new recipe
    public function create()
    {
        return view('recipes.create');
    }

    // Store a newly created recipe
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ]);

        Recipe::create($request->all());

        return redirect()->route('recipes.index')
                         ->with('success', 'Recipe created successfully!');
    }

    // Display a specific recipe
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    // Show form for editing a recipe
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    // Update an existing recipe
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ]);

        $recipe->update($request->all());

        return redirect()->route('recipes.index')
                         ->with('success', 'Recipe updated successfully!');
    }

    // Delete a recipe
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index')
                         ->with('success', 'Recipe deleted successfully!');
    }
}