<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        //! query builder
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id;", ['id' => 1]);

        // $posts = DB::select("SELECT * FROM posts WHERE id = ?;", [2]);

        // $posts = DB::table("posts")->where("id", 3)->select('title', 'body')->get();

        // $posts = DB::table("posts")
        // ->count();
        // ->max('id');
        // ->min('id');
        // ->sum('id');
        // ->find(3) // find by id
        // ->orderBy('id', 'desc') // sort decrease id
        // ->latest('created_at')
        // ->oldest()
        // ->first() //record  first
        // ->whereNotNull("created_at")
        // ->whereBetween("id", [1, 10])
        // ->where("created_at", ">", now()->subDay())
        // ->orWhere("id", ">", 0)
        // ->select('id', 'title', 'body', 'created_at')
        // ->get();

        $posts = DB::table("posts")->insert([
            'title' => 'Post 2',
            'body' => 'This is body post 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        dd($posts);

        // return view('posts.index', [
        //     'title' => 'Posts',
        // ]);
    }
}
