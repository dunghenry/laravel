<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/products', [
    ProductController::class,
    'index'
]);
Route::get('/posts', [PostsController::class,'index']);
Route::get('/products/{id}', [
    ProductController::class,
    'detail'
])->where('id', '[0-9]+');
Route::get('/products/search/{name}', [
    ProductController::class,
    'search'
])->where('name', '[a-zA-Z0-9]+');

//! validate multiple parameters
// ->where([
// 'name' => '[a-zA-Z0-9]+',
// 'id' => '[0-9]+',
// ])

// Route::get('/', function () {
//     return view('home');
// return redirect('/home');
// });
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
