<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});



Route::controller(ProductController::class)->group(function () {
    Route::get("/",'index');
    Route::get("detail/{id}",'detail');
    Route::get("search",'search');
    Route::post("add_to_cart",'addToCart');
    Route::get("cartlist",'cartList'); 
    Route::get("removecart/{id}",'removeCart'); 
    Route::get("ordernow",'orderNow'); 
    Route::post("orderplace",'orderPlace');
    Route::get("myorders",'myOrders');
});
Route::controller(UserController::class)->group(function () {
    Route::post("/login",'login');
   
});


 