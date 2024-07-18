<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function addUser(Request $req){

        $req->validate([
            'username' => 'required',
            'useremail' => 'required|email',
            'userpass' => 'required|alpha_num|min:6',
            'userage' => 'required|numeric|min:18|between:18,21',
            'usercity' => 'required'
        ],[
            'username.required' => 'User Name is Required!',
        ]);
        return $req->all();

    }
}
