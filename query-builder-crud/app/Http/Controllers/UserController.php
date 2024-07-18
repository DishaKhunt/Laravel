<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){

        $users = DB::table('users')->get();

        return view('allusers', ['data'=>$users]);
    }

    public function singleUser(string $id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('user',['data'=> $users]);
    }

    public function addUser(){

                // $user = DB::table('users')->insertOrIgnore(
                //     [
                        
                //         [
                //             'name' => 'Harshika Rabdiya',
                //             'email' => 'harshirabdiya09@gmail.com',
                //             'age' => 22,
                //              'city' => 'Delhi',
                //             'created_at' => now(),
                //             'updated_at' => now()
                //         ],
                                
                        
                //     ]);

                // $user = DB::table('users')->upsert(
                   
                //         [
                //             'name' => 'Harshika Rabdiya',
                //             'email' => 'harshirabdiya09@gmail.com',
                //             'age' => 20,
                //             'city' => 'Mumbai',
                //             'created_at' => now(),
                //             'updated_at' => now()
                //         ],
                //         ['email'],
                //         ['city']
                // );

                // $user = DB::table('users')->insertGetId(
                //     [
                   
                //             'name' => 'Hemaxi Patel',
                //             'email' => 'hemaxipatel@gmail.com',
                //             'age' => 27,
                //             'city' => 'navsari',
                //             'created_at' => now(),
                //             'updated_at' => now()
                //     ]
                // );

                // return $user;

        //    if($user){
        //     echo "<h1>Data Succesfully Added.</h1>";
        //    }
        //    else{
        //     echo "<h1>Data Not Added.</h1>";
        //    }
    }

    public function updateUser(){

        // $user = DB::table('users')->where('id',4)->update(
        //     [
        //         'age' => 23,
        //         'city'=>'Surat',
              
        //     ]
        // );

        // upadte and insert value

        // $user = DB::table('users')->updateOrInsert(
        //     [
        //         'email' => 'ishapatel0502@gmail.com',
        //         'name'=>'Isha Patel',
              
        //     ],
        //     [
        //         'age' => 22
        //     ]
        // );

        
        // $user = DB::table('users')->updateOrInsert(
        //     [
        //         'email' => 'xyz@gmail.com',
        //         'name'=>'XYZ',
              
        //     ],
        //     [
        //         'age' => 22,
        //         'city' => 'Goa'
        //     ]
        // );

        // increment the value
        // $user = DB::table('users')->where('id', 4)->increment('age');

        // $user = DB::table('users')->where('id', 1)->increment('age',5);

        // decrement value
        // $user = DB::table('users')->where('id', 4)->decrement('age');

        // $user = DB::table('users')->where('id', 1)->decrement('age', 3, ['city' => 'Rajkot']);

        // $user = DB::table('users')->where('id', 4)->incrementEach([
        //     'age'=> 2,
        //     'vote'=> 1
        // ]);


        if($user){
            echo "<h1>Data Succesfully Updated.</h1>";
        }
        else{
            echo "<h1>Data Not Updated.</h1>";
        }
    }

    public function deleteUser(string $id){
         $user = DB::table('users')->where('id',$id)->delete();

         if($user){
            return redirect()->route('home');
         }
    }

    public function deleteAllUser(){
        $user = DB::table('users')->delete();
    }
}
