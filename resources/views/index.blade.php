@extends('layouts.app')
@section('content')
    <h1>Page Controller</h1>
    <a href="{{ url( $url) }}">Products Page</a>
    <img src="{{ asset('storage/pen.jpg') }}" width="100" height="100" alt="Pen Image">
    {{ $x = 10 }}
    @if ($x > 2)
        <h3>x is greater than 2</h3>
    @elseif($x < 0)
        <h3>x is less than 0</h3>
    @else
        <h3>All conditions does not match</h3>
    @endif

    {{-- if not --}}
    {{-- @unless (empty($name))
        <h1>Name is not empty</h1>
    @endunless

    @if (!empty($name))
        <h1>Name is not empty</h1>
    @endif --}}

    {{-- @empty(!$name)
        <h1>Name is not empty</h1>
    @endempty --}}

    {{-- @empty($age)
        <h1>Age is not empty</h1>
    @endempty --}}

    {{-- @isset($name)
        <h1>Name has been set</h1>
    @endisset --}}

    {{-- @switch($name)
        @case('Dung')
            <h1>This is Mr Dung</h1>
            @break
        @default
            <h3>No one selected</h3>
    @endswitch --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        <h2>{{ $i }}</h2>
    @endfor --}}

    @foreach ($names as $name)
        <h3>{{ $name }}</h3>
    @endforeach

    @forelse ($fruits as $fruit)
        <h3>{{ $fruit }}</h3>
    @empty
        <h3>Array is empty</h3>
    @endforelse


    {{ $i = 0 }}
    @while ($i < 5)
        <h3>{{ $i }}</h3>
        {{ $i++; }}
    @endwhile

@endsection