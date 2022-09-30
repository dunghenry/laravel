<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $url = url('/products');
        $names = array('Dung', 'Nam', 'Mai');
        $fruits = [];
        return view('index', [
            "title" => "HomePage",
            "url" => $url,
            "name" => "Dung",
            'names' => $names,
            "fruits" => $fruits
        ]);
    }
    public function about()
    {
        return view('about', [
            "title" => "About Page",
        ]);
    }
}
