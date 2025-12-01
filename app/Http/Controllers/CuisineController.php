<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    // Show all cuisines
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('cuisines.index', compact('cuisines'));
    }

    // Show form to create a new cuisine
    public function create()
    {
        return view('cuisines.create');
    }

    // Store a new cuisine
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'origin' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Cuisine::create($request->all());

        return redirect()->route('cuisines.index')
                         ->with('success', 'Cuisine added successfully!');
    }

    // Show a specific cuisine
    public function show(Cuisine $cuisine)
    {
        return view('cuisines.show', compact('cuisine'));
    }

    // Show form to edit a cuisine
    public function edit(Cuisine $cuisine)
    {
        return view('cuisines.edit', compact('cuisine'));
    }

    // Update an existing cuisine
    public function update(Request $request, Cuisine $cuisine)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'origin' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $cuisine->update($request->all());

        return redirect()->route('cuisines.index')
                         ->with('success', 'Cuisine updated successfully!');
    }

    // Delete a cuisine
    public function destroy(Cuisine $cuisine)
    {
        $cuisine->delete();

        return redirect()->route('cuisines.index')
                         ->with('success', 'Cuisine deleted successfully!');
    }
}
