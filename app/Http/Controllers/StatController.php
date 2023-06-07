<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatController extends Controller
{
    //
    function viewLoad()
    {
        return view('stat',['stat'=>['Biology','Maths','English']]);
    }
}
