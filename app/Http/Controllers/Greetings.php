<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Greetings extends Controller
{
    //
    function viewLoad()
{
return view('greetings',['greet'=>'7:00am']);
}
}
