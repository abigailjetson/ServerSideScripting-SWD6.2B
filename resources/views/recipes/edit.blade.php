@extends('layouts.app')

@section('content')
<h1>Edit Recipe</h1>

<form method="POST" action="{{ route('recipes.update', $recipe) }}">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $recipe->title) }}">
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Ingredients</label>
    <textarea name="ingredients" class="form-control">{{ old('ingredients', $recipe->ingredients) }}</textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Instructions</label>
    <textarea name="instructions" class="form-control">{{ old('instructions', $recipe->instructions) }}</textarea>
  </div>

  <button class="btn btn-primary">Update</button>
</form>
@endsection
