<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    public function index()
    {
        $foods = Food::all(); // SELECT * FROM food
        // $foods = Food::where('name', '=', 'Ervin Stiedemann IV')->get();
        // dd($food);
        // dd($foods);
        $url = url('foods/create');
        return view('foods.index', [
            'title' => 'Food Page',
            'foods' => $foods,
            'url' => $url
        ]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('foods.create', [
            'title' => 'Food Page',
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {

        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->description = $request->input('description');
        // $food->count = $request->input('count');

        // $request->file('image')->guessExtension(); //jpg, png,..

        $request->validate([
            'name' => 'required|unique:foods',
            //rule
            // 'name' => new Uppercase,
            'description' => 'required',
            'count' => 'required|integer|min:0|max:1000',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $generatedImageName = 'image' . '_' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $generatedImageName);
        // $request->validated();
        $food = Food::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'count' => $request->input('count'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);

        $food->save();
        return redirect("/foods");
    }
    public function edit($id)
    {
        $food = Food::find($id);
        // dd($food);
        return view('foods.edit', [
            'title' => 'Edit Page',
            'food' => $food
        ]);
    }
    public function update(CreateValidationRequest $request, $id)
    {

        $request->validated();
        $food  = Food::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'count' => $request->input('count'),
        ]);
        return redirect("/foods");
    }
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect("/foods");
    }

    public function show($id)
    {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        $food->category = $category;
        return view('foods.show', [
            'food' => $food,
            'title' => "Food Detail",

        ]);
    }
}
