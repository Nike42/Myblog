<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAuth extends Controller
{
    //
    function loginAuth(Request $req)
    {
        return $req->input();
        $req->session()->put('user',$data['user']);
        return redirect('profile');
    }
}
