<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Cart;

class CartController extends Controller
{
    public function cart () {
        // $cart = Cart::content();

        // return view ('client.pages.cart', ['cart' => $cart]);
        return view('client.pages.cart');
    }
    public function addToCart(Request $request) {
        Cart::add($request->id, $request->name, 1, $request->price, 0, ["date"=>$request->date]);
        
        return redirect()->route('storeCart');
    }
    public function storeCart(){
        // Cart::destroy();
        $carts = (Cart::content());
        dd($carts);
        // Create a User cart & get id 
        $cartID = DB::table('carts')->insertGetId([
            "user_id" => Auth::user()->user_id,
            "payment" => 1,
        ]);
        // Insert Cart Detail
        // foreach($carts as $item){
        //     DB::table('cart_detail')->insert([
        //         "cart_id" => $cartID,
        //         "ticket_id" => $item->id,
        //         "quantity" => $item->qty,
        //         "price" => $item->name,
        //         // "ticket_date" => $item->options->items->date,
        //     ]);
        // }
        
    }
    public function update() {

    }
}
