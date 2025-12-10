@extends('layouts.app')

@section('content')
<h1>Categories</h1>

<a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add Category</a>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{ $category->name }}</td>
        <td>
          <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-primary">View</a>
          <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Edit</a>
          <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
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
