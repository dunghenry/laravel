@extends('layouts.app')
@section('content')
    <a href="{{ url( $url) }}">Products Page</a>
    <h1>Foods Page</h1>
    @foreach ($foods as $item)
        <a href="/foods/{{ $item->id }}">{{ $item->name }}</a><br>
        
        <a href="foods/{{ $item->id }}/edit">Edit</a>
        <form action="/foods/{{ $item->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
@endsection