@extends('layouts.app')

@section('content')
<h1>Edit Cuisine</h1>

<form method="POST" action="{{ route('cuisines.update', $cuisine) }}">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $cuisine->name) }}">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <button class="btn btn-primary">Update</button>
</form>
@endsection
