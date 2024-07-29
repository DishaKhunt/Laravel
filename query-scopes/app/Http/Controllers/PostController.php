<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $post = Post::get();

        // $post = Post::without("user")->find(1);

        // $post = Post::without("user")->get();

        $post = Post::withOnly("user")->get();

        // $post = Post::with("user")->get();

        // $post = Post::withwhereHas("user", function($query){
        //             $query->active();
        //         })->whereStatus(1)->get();

        // $post = Post::with("user")->get([
        //     "title","description", "user_id"
        // ]);

        // $post = Post::with("user:name,email,id")->get([
        //     "title","description", "user_id"
        // ]);

        // $post = Post::with(["user" => function($query){
        //     $query->select("name","email");
        // }])->get();

        // $post = Post::select(["title", "description", "user_id"])
        // ->withWhereHas("user", function($query){
        //     $query->select("id","name","email")->where("city","rajkot");
        // })->get();

        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
