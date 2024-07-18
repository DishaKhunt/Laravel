<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(UserRequest $req){

        // $req->validate([
        //     'username' => 'required',
        //     'useremail' => 'required|email',
        //     'userpass' => 'required|alpha_num|min:6',
        //     'userage' => 'required|numeric|min:18|between:18,21',
        //     'usercity' => 'required'
        // ],[
        //     'username.required' => 'User Name is Required!',
        //     'useremail.required' => 'User email is Required!',
        //     'userpass.required' => 'User pass is Required!',
        //     'userage.required' => 'User age is Required!',
        //     'usercity.required' => 'User city is Required!',

        // ]);
        return $req->all();

    }
}
