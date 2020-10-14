<?php

namespace App\Http\Controllers;

use App\Shop;
use App\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function create(Request $request)
    {
        // dd($request);
        $id=auth()->user()->id;
        if(!(Shop::where('user_id',$id)->exists()))
        {
            $create = new Shop;
            $create->user_id=$id;
            $create->shop_name=$request->shop_name;
            $create->shop_category=$request->shop_category;
            $create->shop_GST=$request->shop_GST;
            $create->bank_account=$request->bank_account;
            $create->state=$request->state;
            $create->city=$request->city;
            $create->zip=$request->zip;
            $create->phone=$request->phone;
            $create->address=$request->address;
            $create->discription=$request->discription;
            $create->is_active=false;
            $create->is_verified=false;
            $create->save();

            $change=User::find($id);
            $change->role=2;
            $change->save();
            return redirect('/home')->with('shop_request','Your request sent successfully, please wait till verify your details');
        }
        else{
            $details=Shop::where('user_id',$id)->get();
            return redirect('/home')->with('shop_request_exist','You already have a company called "'.$details[0]->shop_name.'"');

        }


    }
    public function shop_profile()
    {
        $id=auth()->user()->id;
        $details=Shop::where('user_id',$id)->get();
        return \view('vendor.vendor_shop_profile')->with('details',$details[0]);
    }

    public function shop_profile_update(Request $request)
    {
        $create = $id=auth()->user()->id;
        $create=Shop::where('user_id',$id)->get();
        $create->shop_name=$request->shop_name;
        $create->shop_category=$request->shop_category;
        $create->state=$request->state;
        $create->city=$request->city;
        $create->zip=$request->zip;
        $create->address=$request->address;
        $create->discription=$request->discription;
        $create->save();
        return \back()->with('shop_update_message','Your shop updated successfuly.');

    }
}
