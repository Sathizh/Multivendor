<?php

namespace App\Http\Controllers;

use App\Product;
use App\Customer_Address;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // $product = Product::find($productId);
        // dd($product)
        // Add-To-Cart
        \Cart::session(auth()->id())->add(array(
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity' =>1,
            'attributes'=>array(),
            'associatedModel'=>$product


        ));
        // return redirect()->route('cart.index');
        return back();
    }
    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        // dd($cartItems);
        return view('cart.index')->with('cartItems',$cartItems);
    }
    public function update($rowId)
    {

        \Cart::session(auth()->id())->update($rowId,[
          'quantity'=>array(
              'relative'=>false,
              'value'=>request('quantity'),
          )
        ]);
        return back();
    }

    public function checkout()
    {
        $id=auth()->user()->id;
        $details=Customer_Address::where('user_id',$id)->get();
        // dd($details);
        return view('cart.checkout')->with('details',$details);
    }
    public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }
    public function clear()
    {
        \Cart::session(auth()->id())->clear();
        return back();
    }
}
