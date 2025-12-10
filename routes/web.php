<?php

use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
Route::resource('cuisines', CuisineController::class);
Route::resource('recipes', RecipeController::class);

Route::get('/all-recipes', function () {
    return "<h1>All Recipes</h1>";
});

Route::get('/all-cuisines', function () {
    return "<h1>All Cuisines</h1>";
});

Route::get('/all-categories', function () {
    return "<h1>All Categories</h1>";
});
