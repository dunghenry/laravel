@extends('layouts.app')
@section('content')
    <h1>This is Products Page</h1>
    <h2>Welcome {{ $name }}</h2>
    @foreach ($user as $item)
        <h3>{{ $item }}</h3>
    @endforeach
    <a href="/">Home</a>
@endsection