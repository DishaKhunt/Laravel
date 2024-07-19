<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Database\Seeders\studentSeeder;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();

        $students = Student::find(3);
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student;


        $student->name = "Harshi";
        $student->email = "harshika@gmail.com";
        $student->age = 22;
        // $student->city = "   Rajkot";

        $student->save();
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
