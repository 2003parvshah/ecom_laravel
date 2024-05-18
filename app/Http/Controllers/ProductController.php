<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();

       return view('product',['products'=>$data]);
    }
    function detail($id)
    {
       
    }
    function search(Request $req)
    {
       
    }
    function addToCart(Request $req)
    {
       
    }
    static function cartItem()
    {
   
    }
    function cartList()
    {
      
    }
    function removeCart($id)
    {
      
    }
    function orderNow()
    {
       
    }
    function orderPlace(Request $req)
    {
       
    }
    function myOrders()
    {
       
    }
}
