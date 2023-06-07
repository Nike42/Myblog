<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    //
    function addData(Request $req)
    {
  $customer= new Customer;
  $customer->ContactName=$req->name;
  $customer->city=$req->city;
  $customer->Address=$req->address;
 $customer->save();
 return redirect('add');
    }
}
