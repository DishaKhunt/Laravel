<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::find(5);
        $users = User::get();
        // $roles = $user->roles;
        

        // return $roles;
        foreach($users as $user){
            echo $user->name . "<br>";
            echo $user->email . "<br>";

            foreach($user->roles as $role){
                echo $role->role_name . "<br>";
            } 
            
            echo "<hr>";
        }
        
        /**/
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(5);
        $roles = [1,3];

        // $user->roles()->attach($roles);

        // $user->roles()->detach(3);

        // $user->roles()->detach();

        $user->roles()->sync($roles);
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
