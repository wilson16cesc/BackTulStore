<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\CartProduct;
class CartApiController extends Controller
{
 
  public function index()
  {
    
    $cart = Cart::where('status', 'pending')->first();
    $itemsCart = $cart->products;
    return response()->json($itemsCart);
  }

  public function add(Request $request)
  {
    $cart = new Cart();
    
    $cart = Cart::where('status', 'pending')->first();
    $product = Product::find($request->get('product_id'));
    if(!$cart){
      $cart = new Cart();
      $cart->status = 'pending';
      $cart->save();
    }  
    $itemsCart = $product->carts()->attach($cart,['quantity' => $request->get('quantity')]);
    return response()->json($product->carts());
    

  }
}
