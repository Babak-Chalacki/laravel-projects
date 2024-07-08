<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    function get()
    {
        $carts = Auth::user()->carts;

        return view("client.cart", [
            "carts" => $carts
        ]);
    }
    function add(Request $request)
    {
        $carts = Cart::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"]);
        if ($carts->count() == 0) {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $request["product_id"];
            // $cart->quantity = $request["quantity"];
            $cart->save();
            return "save successful";
        } else {
            // $carts->update(["quantity" => $request["quantity"]]);

            return "save failed";
        }
    }
    function update_cart_count(Request $request)
    {

        $cart = Cart::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"])->first();
        $cart->count = $request["newCount"];
        $cart->save();
        return "ok";
    }
    public function deleteProduct(Request $request)
    {
        $cart = Cart::where("user_id", "=", Auth::id())
            ->where("product_id", "=", $request->input("product_id"))
            ->first();

        $cart->delete();
    }
}