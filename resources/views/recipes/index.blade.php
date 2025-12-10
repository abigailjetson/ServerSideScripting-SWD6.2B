@extends('layouts.app')

@section('content')
<h1>Recipes</h1>

<a href="{{ route('recipes.create') }}" class="btn btn-success mb-3">Add Recipe</a>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recipes as $recipe)
      <tr>
        <td>{{ $recipe->title }}</td>
        <td>
          <a href="{{ route('recipes.show', $recipe) }}" class="btn btn-sm btn-primary">View</a>
          <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-sm btn-secondary">Edit</a>
          <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
