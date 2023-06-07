<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
class CustomersController extends Controller
{
    //
    function getData()
    {
        return Customers::all();
    }
}
