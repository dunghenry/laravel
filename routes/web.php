<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/numbers', function () {
    return [1, 2, 3];
});
Route::get('/users', function () {
    $users = [
        [
            "name" => "John",
            "age" => 34,
        ],
        [
            "name" => "Dung",
            "age" => 22,
        ]
    ];
    return response()->json($users);
});
