<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Cart;

class CartController extends Controller
{
    public function addToCart($id){
        $products = DB::table("tickets")->where('id', $id)->first();

        Cart::add($id, $products->name, 1, $products->price);
    }
}
