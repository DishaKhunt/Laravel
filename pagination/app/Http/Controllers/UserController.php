<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){

        // $users = DB::table('users')->orderBy('name')->simplePaginate(4);
        // $users = DB::table('users')->paginate(4, ['*'], 'p',2);
        // $users = DB::table('users')->paginate(5)->appends(['sort' => 'votes', 'test'=>'abc']);
        $users = DB::table('users')->paginate(5)->fragment('users');
        // $users = DB::table('users')->orderBy('id')->cursorPaginate(5);


        // return $users;
        return view('allusers', ['data'=>$users]);
    }

    public function singleUser(string $id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('user',['data'=> $users]);
    }

    public function addUser(Request $req){
        // return $req;
            
        $user = DB::table('users')->insert(
            [
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
            ]
            );
        if($user){
            return redirect()->route('home');
        }
        else{
            echo "<h1>Data Not Added.</h1>";
        }
    }

    public function UpdatePage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);
        return view('updateuser',['data'=> $user]);
    }

    public function updateUser(Request $req , $id){

        $user = DB::table('users')->where('id', $id)->update(
            [
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
            ]
        );


        if($user){
            return redirect()->route('home');
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
