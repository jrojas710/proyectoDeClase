<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cliente_id = 1; 
        
        $cartItems = CartItem::where('customer_id', $cliente_id)->with('product')->get();

        $total = 0;
        foreach($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function store(Request $request)
    {
        $cliente_id = 1; 
        $product_id = $request->input('product_id');

        $item = CartItem::where('customer_id', $cliente_id)->where('product_id', $product_id)->first();

        if($item) {
            $item->quantity += 1;
            $item->save();
        } else {
            $item = new CartItem();
            $item->customer_id = $cliente_id;
            $item->product_id = $product_id;
            $item->quantity = 1;
            $item->save();
        }

        return redirect()->route('cart.index')->with('success', '¡Añadido al carrito! 🛒');
    }

    public function destroy($id)
    {
        $item = CartItem::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Producto eliminado 🗑️');
    }
}