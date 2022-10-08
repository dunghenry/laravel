@extends('layouts.app')
@section('content')
    <h1>Update Food</h1>
     <form action="/foods/{{ $food->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name : </label>
            <br>
            <input type="text" name="name" value="{{ $food->name }}" placeholder="Enter food's name">
        </div>
         <br>
        <div>
            <label>Description : </label> 
            <br>
            <input type="text" name="description" value="{{ $food->description }}"  placeholder="Enter food's description">
        </div>
         <br>
        <div>
            <label>Count : </label>
            <br>
            <input type="number" name="count" value="{{ $food->count }}" placeholder="Enter food's count">
        </div>
         <br>
         <div>
            <button type="submit">Update food</button>
         </div>
    </form>
@endsection