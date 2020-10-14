<?php

namespace App\Http\Controllers;

use App\Shop;
use App\User;
use App\Order;
use App\Product;
use App\Customer_Address;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //  $products = Product::take(8)->get();->paginate(4);
         $products = Product::orderBy('created_at','desc')->paginate(16);
        return view('index')->with('Products',$products);
    }
    public function customer_dashboard()
    {
        $id=auth()->user()->id;
        $orders=Order::where("user_id",$id)->get();
        return view('customer.customer_dashboard')->with('Orders',$orders);

    }
    public function customer_profile()
    {
        $id=auth()->user()->id;
        $details=User::findOrfail($id);
        return \view('customer.customer_profile')->with('details',$details);

    }
    // public function phonevalidation(Request $request)
    // {
    //     if($request->get('phone'))
    //     {
    //         $phone = $request->get('phone');
    //         $data = User::where('phone', $phone)->count();
    //         if($data > 0)
    //         {
    //             echo "not_unique";
    //         }
    //         else
    //         {
    //             echo "unique";
    //         }
    //     }
    // }
    public function GSTvalidation(Request $request)
    {
        if($request->get('gst'))
        {
            $gst = $request->get('gst');
            $data = Shop::where('shop_GST', $gst)->count();
            dd($data);
            if($data > 0)
            {
                echo "not_unique";
            }
            else
            {
                echo "unique";
            }
        }
    }
    public function customer_address()
    {
        $id=auth()->user()->id;
        $details=Customer_Address::where('user_id',$id)->get();
        return \view('customer.customer_address')->with('details',$details);

    }
    public function customer_address_update(Request $request)
    {
        $id=auth()->user()->id;
        $exist=Customer_Address::where('user_id',$id)->exists();
        if($exist)
        {

            $data=Customer_Address::where('user_id',$id)->get();
            $update=Customer_Address::findOrFail($data[0]->id);
            $update->full_address=$request->input('address');
            $update->city=$request->input('city');
            $update->state=$request->input('state');
            $update->zip=$request->input('zip');
            $update->save();
            return back()->with('address_update_message','Your Address updated successfuly.');
        }
        else
        {
            $update= new Customer_Address;
            $update->full_address=$request->input('address');
            $update->city=$request->input('city');
            $update->state=$request->input('state');
            $update->zip=$request->input('zip');
            $update->user_id=$id;
            $update->save();
            return back()->with('address_update_message','Your Address updated successfuly.');

        }
    }

    public function single_product(Product $product)
    {
        return view('product');
    }
}
