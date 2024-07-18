<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();

        // $users = User::find([2,4], ['name','email']);

        // $users = User::count();

        // $users = User::max('age');

        // $users = User::sum('age');

        // $users = User::where('city','goa')->get();

        // $users = User::where('city','delhi')->where('age','>',20)->get();

        /* $users = User::where([
            ['city','goa'],
            ['age', '>' , 23]
            ])->get(); */

        // $users = User::where('city','delhi')->orWhere('age','>',20)->get();

        // $users = User::whereCity('goa')->get();

        // $users = User::whereAge('58')->select('name', 'email as User Email')->get();


        // $users = User::whereCity('Beierstad')->first();

        // $users = User::where('Age', '<>', 20)->get();

        // $users = User::whereNot('Age', 20)->get();

        // $users = User::whereBetween('Age', [19,28])->get();

        // $users = User::whereIn('city', ['Beierstad','Murphyport'])->get();

        // $users = User::whereNotIn('city', ['Beierstad','Murphyport'])->get();

        // $users = User::selectRaw('name,age')->get();

        // $users = User::whereRaw('age>20')->get();

        $users = User::orderByRaw('age,city')->get();

        // return $users;

        // foreach($users as $user){
        //     echo $user->name . "<br><br>";
        // }

        // return view('welcome', ['data' => $users]);
        return view('welcome', compact('users'));
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