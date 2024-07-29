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
        // $post = Post::find(1);
        // return $post->tags;

        // $post = Post::with('tags')->find(1);
        $posts = Post::with('tags')->get();
        // return $post;

        foreach($posts as $post){
            echo "<h2>$post->name</h2>";
            echo "<p>$post->description</p>";

            
        foreach($post->tags as $tag){
            echo "$tag->tag_name / ";
        }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = Post::create([
        //     "name" => 'News Title Four',
        //     "description" => 'gyysf sbkg hgdhg dnbgfjgbj'
        // ]);

        // $post->tags()->create([
        //     "tag_name" => "Sachin Tendulkar"
        // ]);


       /*  $post = Post::create([
                "name" => 'News Title five',
                "description" => 'bahgdh vguisjhd bhjsna'
        ]);

        $post->tags()->attach(5); */

        $post = Post::find(3);

        $post->tags()->attach([2,6]);
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
