@extends('layouts.app')
@section('content')
    <h1>Create New Food</h1>
    <form action="/foods" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name : </label>
            <br>
            <input type="text" name="name" placeholder="Enter food's name">
        </div>
         <br>
        <div>
            <label>Description : </label> 
            <br>
            <input type="text" name="description" placeholder="Enter food's description">
        </div>
         <br>
        <div>
            <label>Count : </label>
            <br>
            <input type="number" name="count" placeholder="Enter food's count">
        </div>
         <br>
         <div>
            <label>Choose a categories : </label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
         </div>
         <br>
         <div>
            <label>Choose a image : </label>
            <input type="file" name="image">
         </div>
         <br>
         <div>
            <button type="submit">Create food</button>
         </div>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
@endsection