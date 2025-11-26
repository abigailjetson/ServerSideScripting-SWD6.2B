<?php

use Illuminate\Support\Facades\Route;

// List all recipes
Route::get('/recipes', [RecipeController::class, 'index']);

// Show single recipe
Route::get('/recipes/{id}', [RecipeController::class, 'show']);

// Create new recipe
Route::post('/recipes', [RecipeController::class, 'store']);

// Update recipe
Route::put('/recipes/{id}', [RecipeController::class, 'update']);

// Delete recipe
Route::delete('/recipes/{id}', [RecipeController::class, 'destroy']);

//Level
Route::get('/levels', [LevelController::class, 'index']);
Route::get('/levels/{id}', [LevelController::class, 'show']);
Route::post('/levels', [LevelController::class, 'store']);
Route::put('/levels/{id}', [LevelController::class, 'update']);
Route::delete('/levels/{id}', [LevelController::class, 'destroy']);

//Category
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

//Cuisine
Route::get('/cuisines', [CuisineController::class, 'index']);
Route::get('/cuisines/{id}', [CuisineController::class, 'show']);
Route::post('/cuisines', [CuisineController::class, 'store']);
Route::put('/cuisines/{id}', [CuisineController::class, 'update']);
Route::delete('/cuisines/{id}', [CuisineController::class, 'destroy']);
