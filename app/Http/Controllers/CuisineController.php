<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('cuisines.index', compact('cuisines'));
    }

    public function create()
    {
        return view('cuisines.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Cuisine::create($validated);

        return redirect()->route('cuisines.index')->with('success', 'Cuisine created successfully.');
    }

    public function show(Cuisine $cuisine)
    {
        return view('cuisines.show', compact('cuisine'));
    }

    public function edit(Cuisine $cuisine)
    {
        return view('cuisines.edit', compact('cuisine'));
    }

    public function update(Request $request, Cuisine $cuisine)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $cuisine->update($validated);

        return redirect()->route('cuisines.index')->with('success', 'Cuisine updated successfully.');
    }

    public function destroy(Cuisine $cuisine)
    {
        $cuisine->delete();
        return redirect()->route('cuisines.index')->with('success', 'Cuisine deleted successfully.');
    }
}
