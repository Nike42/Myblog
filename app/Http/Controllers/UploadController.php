<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req)
    {
       # echo "<em>Hello, Upload</em>";
       return $req->file('file')->store('doc');
    }
}
