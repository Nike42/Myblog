<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AgeController;
use App\http\Controllers\StatController;
use App\http\Controllers\Greetings;
use App\http\Controllers\Names;
use App\http\Controllers\FormController;
use App\http\Controllers\MyController;
use App\http\Controllers\CustomersController;
use App\http\Controllers\LoginAuth;
use App\http\Controllers\UploadController;
use App\http\Controllers\EmployeeController;
use App\http\Controllers\CustomerController;
use App\http\Controllers\Products;

 /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
});
Route::view("post", "post");
 
Route::view("about", 'about');
Route::view("contact", 'contact');

 Route::post("users", [UsersController::class, 'getData']);
  Route::view("users", "users");

 Route::view("about", "about");
 Route::view("hello", "hello");

 #Route::get("path","controller file");
 Route::get("AgeController",[AgeController::class,'index']);

Route::get("stat",[StatController::class, 'viewLoad']);
Route::get("greetings",[Greetings::class, 'viewLoad']);
Route::get("names",[Names::class, 'viewLoad']);

Route::get("form",[Formcontroller::class,'getdata']);

Route::post("form", [FormController::class, 'getData']);
Route::view("form", "form");

Route::view("user", "user");
Route::view("home", "home");
Route::view("noaccess", "noaccess");

Route::get("my", [MyController::class, 'index']);
 
Route::get('customers',[CustomersController::class,'getData']);

Route::get('user',[LoginAuth::class,'user']);
Route::view("login",'login');
Route::view("profile",'profile');
Route::get('/', function () {
if(session()->has('user'))
{
    session()->pull('login');
}
return redirect('login');
});

Route::view('upload','upload');
Route::post('upload',[UploadController::class,'index']);

 Route::get('list',[EmployeeController::class,'show']);

 Route::view('add','addcustomer');
 Route::post('add',[CustomerController::class,'addData']);

 Route::get('lists',[Products::class,'dbOperations']);