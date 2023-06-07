<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //
    function show()
    {
        //return Employee::all();
        $data= Employee::all();
       return view('list',['employees'=>$data]);
    }
}
