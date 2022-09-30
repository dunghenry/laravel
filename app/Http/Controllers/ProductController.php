<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // return response()->json([
        //     [
        //         "name" =>"Dung"
        //     ]
        // ]);

        $title = "Products Page";
        $name = "Dung";
        // multiple value
        // return view("products.index", compact("title", "name"));

        //single value
        // return view("products.index")->with('title', $title);
        $user = [
            "name" => "Dung",
            "age" => 22
        ];
        // return view("products.index", compact("user", "title", "name"));
        return view("products.index", [
            "user" => $user,
            "title" => $title,
            "name" => $name
        ]);
    }
    public function detail($id)
    {
        return view("products.detail", [
            "id" => $id,
            "title" => "Product Detail",
        ]);
    }

    public function search($name)
    {
        $products = [
            'iphone' => "Iphone 14",
            'samsung' => "Galaxy S22 Ultra",
        ];
        return view("products.search", [
            "product"
            => $products[$name] ?? 'Product not found',
            "title" => "Product Detail",
            "name" => $name,
        ]);
    }
}
