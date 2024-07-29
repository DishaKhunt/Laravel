<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test = Test::get();

        // $test = Test::orderBy('meta_data->name')->get();

        // $test = Test::find(3);
        // return $test->meta_data["name"];

        // return $test->meta_data["address"]["city"];

        // $test = Test::where('meta_data->name', "Disha Patel")->get();

        // $test = Test::where('meta_data->name', "LIKE", 'Is%')->get();

        // $test = Test::whereJsonContains('meta_data->name', "Disha Patel")->get();

        $test = Test::whereJsonLength('meta_data->name', 0)->get();

        return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       /*  $test = new Test;

        $test->meta_data = [
            'name' => 'Disha Patel',
            'email' => 'disha@gmail.com',
            'phone' => '9913554785'
        ];

        $test->save(); */

        // $test = Test::create([
        //     'meta_data' => [
        //         'name' => 'Manshi Patel',
        //         'email' => 'manshi@gmail.com',
        //         'mobile_number' => '8980443879',
        //         'address' => [
        //             'street' => '150 feet ring road',
        //             'city' => 'Rajkot',
        //             'country' => 'India'
        //         ]

        //     ]
        // ]);

        $test = Test::where('id', 1)->update([
            'meta_data->email' => 'isha@gmail.com'
        ]);

        // $test = Test::find(2);
        // $test->meta_data['email'] = 'dishapatel@gmail.com';
        // $test->save();

        // $test = Test::where('id', 3)->update([
        //     'meta_data->address->city' => 'surat'
        // ]);

        // remove the key
        // $test = Test::find(1);
        // $test->meta_data = collect($test->meta_data)->forget('email');
        // $test->save();
        

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
