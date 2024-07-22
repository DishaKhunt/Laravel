<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::get();

        // $posts = Post::with('user')->get();

        // $posts = Post::with('user')->find(2);

        // $posts = Post::with('user')->where('title', 'Second Post' )->get();

        /* $posts = Post::withWhereHas('user', function($query){
                $query->where('name', 'Rahul Sharma')
                    ->orWhere('name', 'Vikram Singh');
        })->get(); */

        $users = User::where('name', 'Rahul Sharma')->get();
        $posts = Post::whereBelongsTo($users)->get();

        // return $users;

        return $posts;

        /* $posts = Post::with('user')->get();

        foreach($posts as $post){
            echo "<div style='border: 1px solid black; margin: 0 0 10px; padding: 5px'>
                    <h3>$post->title</h3>
                    <span>{$post->user->name}</span>
                    <p>$post->description</p>
            </div>";
        } */
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
