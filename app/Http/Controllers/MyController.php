<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MyController extends Controller
{
    //
    function index()
    {
         return DB::select("select * from users");
        #echo "Hello This is my controller";
    }
}
