<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tag = Tag::with(['posts:name,description',"videos"])->find(4);

        // return $tag;

        echo "<h1>All Posts</h1>";

        foreach($tag->posts as $post){
            echo "<h2>$post->name</h2>";
            echo "<p>$post->description</p>";
            echo "<hr>";
        }
        echo "<h1>All Videos</h1>";

        foreach($tag->videos as $video){
            echo "<h2>$video->title</h2>";
            echo "<p>$video->url</p>";
            echo "<hr>";
        }
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
