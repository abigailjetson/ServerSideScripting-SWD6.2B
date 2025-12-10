@extends('layouts.app')

@section('content')
<h1>Add Cuisine</h1>

<form method="POST" action="{{ route('cuisines.store') }}">
  @csrf

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <button class="btn btn-success">Save</button>
</form>
@endsection
