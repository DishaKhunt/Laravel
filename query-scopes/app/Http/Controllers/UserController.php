<?php

namespace App\Http\Controllers;

use App\Models\Scopes\UserScope;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();

        // $users->load("post");

        // $users = User::with("posts")->get();

        // $users = User::get();

        // $users = User::pluck("name", "email");

        // $users = User::where("city", "rajkot")->pluck("name","city");

        // $users = User::find(3,["name","email"]);

        // $users = User::find(1)->email;

        // $users = User::where("city", "surat")->first()->email;

        // $users = User::where("city", "surat")->value("email");

        // $users = User::withoutGlobalScope(UserScope::Class)->get();

        // $users = User::withoutGlobalScope(UserScope::Class)
        //             ->city(["Rajkot"])
        //             ->sort()
        //             ->get();

        // $users = User::with('posts')
        //             ->where('status',1)
        //             ->get();

        // $users = User::with('posts')
        //             ->whereCity('Rajkot')
        //             ->where('status',1)
        //             ->get();

        // $users = User::with('posts')
        //             ->sort()
        //             ->get();

        // $users = User::with('posts')
        //             ->city(["Rajkot", "Mumbai"])
        //             ->active()
        //             ->sort()
        //             ->get();

        
        // $users = User::with('posts:title,description,user_id')
        //             ->sort()
        //             ->get();


         
        // $users = User::select("id","name","email")
        //             ->with('posts:title,description,user_id')
        //             ->city(["Rajkot"])
        //             ->sort()
        //             ->get();

        // $users = User::city(["Rajkot"])
        //             ->sort()
        //             ->get();

        return $users;
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
