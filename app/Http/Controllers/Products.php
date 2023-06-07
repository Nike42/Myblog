<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Products extends Controller
{
    //
    function dbOperations()
    {
        $data= DB::table('products')->get();
     return view('lists',['data'=>$data]);
     }
}
