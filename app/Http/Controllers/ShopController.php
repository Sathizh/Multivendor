<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function create(Request $request)
    {
        dd($request);
        return \view('Shop.create');
    }
}
