<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    //
    public function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'userpassword'=>'required | min:5'
        ]);
       // return DB::select("select * from users");
        return $req->input();  
     }
}
