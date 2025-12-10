@extends('layouts.app')

@section('content')
<h1>Edit Category</h1>

<form method="POST" action="{{ route('categories.update', $category) }}">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <button class="btn btn-primary">Update</button>
</form>
@endsection
