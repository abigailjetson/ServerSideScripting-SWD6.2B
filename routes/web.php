<?php

use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
Route::resource('cuisines', CuisineController::class);
Route::resource('recipes', RecipeController::class);

