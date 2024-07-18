<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){

        // $users = DB::table('users')
        //             ->select('city')
        //             ->distinct()
        //             ->get();

        // $users = DB::table('users')
        // ->pluck('name','email');
                    

            // 'email as user_email' name upadte 
        // $users = DB::table('users')->where('city','Port Ivyshire')->where('age','>',20)->get();

        // $users = DB::table('users')->where('city','Port Ivyshire')->orWhere('age','<',20)->get();
        
        // $users = DB::table('users')->whereBetween('id',[3,6])->get();

        // $users = DB::table('users')->orWhereBetween('age',[15,20])->get();

        // $users = DB::table('users')->whereIn('id',[1,5,7])->get();

        // $users = DB::table('users')->whereNotBetween('age',[15,20])->get();

        // $users = DB::table('users')->whereNotIn('id',[3,6])->get();

        // $users = DB::table('users')->whereNull('email')->get();

        // $users = DB::table('users')->whereNotNull('email')->get();

        // $users = DB::table('users')->whereDate('created_at','2024-07-04')->get();

        // $users = DB::table('users')->whereMonth('created_at','7')->get();

        // $users = DB::table('users')->whereDay('created_at','5')->get();

        $users = DB::table('users')->whereYear('created_at','2023')->get();

        // $users = DB::table('users')->where(
        //     [
        //         ['city', '=', 'Port Ivyshire'],
        //         ['age', '>', 20]
        //     ]
        // )->get();

        // $users = DB::table('users')->where('name','like','S%')->get();

        // $users = DB::table('users')->where('city','Port Ivyshire')->where('age','>',20)->get();

        // $users = DB::table('users')->find(4);

        // return $users;

        // dd($users);

        // dump($users);

        // foreach($users as $user){
        //     echo $user->name . "<br>";
        // }

        return view('allusers', ['data'=>$users]);
    }

    public function singleUser(string $id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('user',['data'=> $users]);
    }
}
