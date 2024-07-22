<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::get();

        // $users = User::with('post')->get();
        
        // $users = User::with('post')->find(3);
/* 
        $users = User::find(2);
        $posts = $users->post; */

        // $users = User::dosentHave('post')->get();

        // $users = User::has('post')->with('post')->get();

        // $users = User::withCount('post')->get();

        $users = User::select(['name','email'])
                    ->withCount('post')
                    ->get();

        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* $post = new Post([
            'title' => 'Seven Post',
            'description' => 'This is the description for the seven post.'
        ]);

        $user = User::find(2);

        $user->post()->save($post); */

        
        /* $user = User::find(1);

        $user->post()->create([
            'title' => 'Eight Post',
            'description' => 'This is the description for the eight post.'
        ]); */

        $user = User::find(1);

        $user->post()->createMany(
            [
                [
                    'title' => 'Nine Post',
                    'description' => 'This is the description for the nine post.'
                ],
                [
                    'title' => 'Ten Post',
                    'description' => 'This is the description for the ten post.'
                ]
            ]
        );

       
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
