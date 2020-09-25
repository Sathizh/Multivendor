<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
   public function add_or_remove(Product $product)
    {
        $id=auth()->user()->id;
        $exist=Wishlist::where('user_id',$id)->where('product_id',$product->id)->exists();
        if(!$exist)
        {
            $add= new Wishlist;
            $add->user_id=$id;
            $add->product_id=$product->id;
            $add->save();
        }
        else{
            Wishlist::where('user_id',$id)->where('product_id',$product->id)->delete();
        }
        return \back();
    }
    public function wishlist()
    {
        $id=auth()->user()->id;
        $details=Wishlist::where('user_id',$id)->get();
        return view('customer.customer_wishlist')->with('details',$details);
    }
    public function delete()
    {
        $id=auth()->user()->id;
        Wishlist::where('user_id',$id)->delete();
        return \back()->with('wishlist_clear_message','Your whishlist cleared successfuly.');
    }
}
