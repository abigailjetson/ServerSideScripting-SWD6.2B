@extends('layouts.app')

@section('content')
<h1>{{ $cuisine->name }}</h1>

<a href="{{ route('cuisines.edit', $cuisine) }}" class="btn btn-secondary">Edit</a>
@endsection
