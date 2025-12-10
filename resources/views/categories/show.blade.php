@extends('layouts.app')

@section('content')
<h1>{{ $category->name }}</h1>

<a href="{{ route('categories.edit', $category) }}" class="btn btn-secondary">Edit</a>
@endsection
