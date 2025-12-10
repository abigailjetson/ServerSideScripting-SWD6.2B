@extends('layouts.app')

@section('content')
<h1>{{ $recipe->title }}</h1>

<p><strong>Ingredients:</strong></p>
<p>{{ $recipe->ingredients }}</p>

<p><strong>Instructions:</strong></p>
<p>{{ $recipe->instructions }}</p>

<a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-secondary">Edit</a>
@endsection
