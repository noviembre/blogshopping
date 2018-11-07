<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {
        $pdt = Product::find(request()->pdt_id);

        $cartItem = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price,

        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route('cart');
    }


    public function cart()
    {
        //Cart::destroy(); - if you wan to delete and item
        return view('cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function incr($id, $qty)
    {

        Cart::update($id, $qty + 1);
        return redirect()->back();

    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);
        return redirect()->back();

    }


    public function rapid_add($id)
    {
        $pdt = Product::find($id);

        $cartItem = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => 1,
            'price' => $pdt->price,

        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route('cart');
    }


}
