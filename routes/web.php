<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
use App\Models\Cuisine;
use App\Models\Category;

Route::resource('categories', CategoryController::class);
Route::resource('cuisines', CuisineController::class);
Route::resource('recipes', RecipeController::class);

// Recipes
Route::get('/recipes', function () {
    //return "<h1>All Recipes</h1>";
    return view('cuisine.index');
});

Route::get('/recipes/create', function () {
    //return "<h1>Create New Recipe</h1>";
    return view('cuisine.create');
});

Route::get('/recipes/{id}', function ($id) {
    //return Recipe::find($id);
    return view('recipes.show');
});

Route::get('/recipes/{id}/edit', function ($id) {
    //$recipe = Recipe::findOrFail($id);
    return view('recipes.edit', compact('recipe'));
});

// Cuisines
Route::get('/cuisines', function () {
    //return "<h1>All Cuisines</h1>";
    return view('cuisine.index');
});

Route::get('/cuisines/create', function () {
    //return "<h1>Create New Cuisine</h1>";
    return view('cuisine.create');
});

Route::get('/cuisines/{id}', function ($id) {
   // return Cuisine::find($id);
   return view('cuisine.show');
});

Route::get('/cuisines/{id}/edit', function ($id) {
    //$cuisine = Cuisine::findOrFail($id);
    return view('cuisines.edit', compact('cuisine'));
});

// Categories
Route::get('/categories', function () {
    //return "<h1>All Categories</h1>";
    return view('categories.index');
});

Route::get('/categories/create', function () {
    // return "<h1>Create New Category</h1>";
    return view('categories.create');
});

Route::get('/categories/{id}', function ($id) {
    //return Category::find($id);
    return view('categories.show');
});

Route::get('/categories/{id}/edit', function ($id) {
    //$category = Category::findOrFail($id);
    return view('categories.edit', compact('category'));
});