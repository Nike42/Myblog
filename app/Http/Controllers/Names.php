<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Names extends Controller
{
    //
    function viewLoad()
    {
        $data=['blessing','caleb',"simi",'nike'];
        return view('names',['names'=>$data]);
    }
}
