@extends('layouts.app')
@section('content')
    <h3>
        {{ $food->name }}
    </h3>
    <p>
        {{ $food->description }}
    </p>
    <p>
        #{{ $food->category->name }}
    </p>
    <img src="{{ asset('images/'.$food->image_path) }}" alt="Image food">
@endsection