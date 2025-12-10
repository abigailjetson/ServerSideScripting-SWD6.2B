@extends('layouts.app')

@section('content')
<h1>Cuisines</h1>

<a href="{{ route('cuisines.create') }}" class="btn btn-success mb-3">Add Cuisine</a>

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
    @foreach($cuisines as $cuisine)
      <tr>
        <td>{{ $cuisine->name }}</td>
        <td>
          <a href="{{ route('cuisines.show', $cuisine) }}" class="btn btn-sm btn-primary">View</a>
          <a href="{{ route('cuisines.edit', $cuisine) }}" class="btn btn-sm btn-secondary">Edit</a>
          <form action="{{ route('cuisines.destroy', $cuisine) }}" method="POST" class="d-inline">
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
