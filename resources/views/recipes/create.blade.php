@extends('layouts.app')

@section('content')
<h1>Add Recipe</h1>

<form method="POST" action="{{ route('recipes.store') }}">
  @csrf

  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Ingredients</label>
    <textarea name="ingredients" class="form-control">{{ old('ingredients') }}</textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Instructions</label>
    <textarea name="instructions" class="form-control">{{ old('instructions') }}</textarea>
  </div>

  <button class="btn btn-success">Save</button>
</form>
@endsection
