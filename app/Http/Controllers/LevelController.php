<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    // Show all levels
    public function index()
    {
        $levels = Level::all();
        return view('levels.index', compact('levels'));
    }

    // Show form to create a new level
    public function create()
    {
        return view('levels.create');
    }

    // Store a new level
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Level::create($request->all());

        return redirect()->route('levels.index')
                         ->with('success', 'Level created successfully!');
    }

    // Show a specific level
    public function show(Level $level)
    {
        return view('levels.show', compact('level'));
    }

    // Show form to edit a level
    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }

    // Update an existing level
    public function update(Request $request, Level $level)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $level->update($request->all());

        return redirect()->route('levels.index')
                         ->with('success', 'Level updated successfully!');
    }

    // Delete a level
    public function destroy(Level $level)
    {
        $level->delete();

        return redirect()->route('levels.index')
                         ->with('success', 'Level deleted successfully!');
    }
}
