{{-- model --}}
@foreach ($orders as $order)
<div class="modal fade" id="CustomerDetails_{{ $order->id }}" tabindex="-1" data-backdrop="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $order->order_number }}</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive shopping-cart mb-0">
                    <table class="table">
                        {{-- <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                                src="{{ asset('assets/img/shop/cart/01.jpg') }}" alt="Product"></a>
                        <div class="product-info">
                            <h4 class="product-title"><a href="shop-single.html">Unionbay
                                    Park<small>x 1</small></a></h4>
                            <span><em>Size:</em>
                                10.5</span><span><em>Color:</em> Dark
                                Blue</span>
                        </div>
                </div>
                </td>
                <td class="text-center text-lg text-medium">₹43.90</td>
                </tr>
                </tbody> --}}
                Customer_name : {{ $order->shipping_fullname }}<br>
                Customer_phone : {{ $order->shipping_phone }}<br>
                shipping_address : {{ $order->shipping_address }}<br>
                shipping_city : {{ $order->shipping_city }}<br>
                shipping_state : {{ $order->shipping_state }}<br>
                shipping_zipcode : {{ $order->shipping_zipcode }}
                </table>
            </div>
            <hr class="mb-3">
            {{-- <div class="d-flex flex-wrap justify-content-between align-items-center pb-2"> --}}
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon mt-2"><i class="pe-7s-cart"></i></div>
                    </div>
                    <h4 class="step-title">Confirmed Order</h4>
                </div>
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="pe-7s-config"></i></div>
                    </div>
                    <h4 class="step-title">Processing Order</h4>
                </div>
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="pe-7s-medal"></i></div>
                    </div>
                    <h4 class="step-title">Quality Check</h4>
                </div>
                <div class="step">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="pe-7s-car"></i></div>
                    </div>
                    <h4 class="step-title">Product Dispatched</h4>
                </div>
                <div class="step">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="pe-7s-home"></i></div>
                    </div>
                    <h4 class="step-title">Product Delivered</h4>
                </div>
            </div>
            <form action="/update_order_status" method="post">
                @csrf
                <div class="float-right d-flex px-1">
                    <select name="order_status" id="" class="form-control">
                        <option value="{{ $order->order_status }}" selected>{{ $order->order_status }}</option>
                        <option value="Confirmed Order">Confirmed Order</option>
                        <option value="Processing Order">Processing Order</option>
                        <option value="Quality Check">Quality Check</option>
                        <option value="Product Dispatched">Product Dispatched</option>
                        <option value="Product Delivered">Product Delivered</option>
                    </select>
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <input type="submit" value="Update order" class="btn btn-outline-info mt-0 ml-2">
                </div>
            </form>
        </div>
        {{-- </div> --}}
    </div>
</div>
</div>
@endforeach
@extends('layouts.unishop')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row">
        @php
        $id=auth()->user()->id;
        $details=App\Shop::where('user_id',$id)->get();
        $details=$details[0];
        @endphp
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-cover" style="background-image: url(assets/img/account/user-cover-img.jpg);">
                </div>
                <div class="user-info">
                    <div class="user-avatar">
                        <form action="/new_profile_change" id="profile_change" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <a class="edit-avatar" id="profile_tog"></a>
                            <input type="file" class="edit-avatar d-none" name="new_profile_photo"
                                id="profile_update_trig" href="#">
                        </form>
                        <img src="../assets/img/profile_img/{{ auth()->user()->profile_photo }}" alt="User">
                    </div>
                    <div class="user-data">
                        <h4>{{ $details->shop_name }}</h4><span><b>Since
                            </b>{{ date('F d Y', strtotime($details->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge" href="{{ route('shop.dashboard') }}"><i
                        class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('shop.profile') }}"><i class="icon-head"></i>Shop
                    Profile</a>
                <a class="list-group-item " href="{{ route('product.add') }}"><i class="icon-plus"></i>Add Product</a>
                <a class="list-group-item with-badge " href="{{ route('product.list')}}"><i class="icon-box"></i>My
                    Products</a>
                <a class="list-group-item with-badge active" href="#"><i class="icon-archive"></i>My
                    Orders</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="table-responsive wishlist-table margin-bottom-none">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Your Orders</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)

                        @php
                        $products=$order->order_items;
                        // dd($order);
                        @endphp
                        @foreach ($products as $product)
                        @if ($product['associatedModel']['user_id']==$id && $order->order_status != "Product Delivered")
                        @php

                        $img= App\Image::where('product_id',$product['id'])->get();
                        @endphp



                        <tr>
                            <td>
                                <div class="product-item"><a class="product-thumb"
                                        href="{{ route('details',$product['id']) }}"><img
                                            src="/assets/img/product_img/{{ $img[0]->file_name }}" alt="Product"></a>
                                    <div class="product-info">
                                        <h4 class="product-title"><a data-toggle="modal"
                                                data-target="#CustomerDetails_{{ $order->id }}"
                                                href="#">{{ $product['name']}}</a>
                                        </h4>
                                        <div class="text-lg text-medium text-muted">₹{{ $product['price'] }}</div>
                                        <div>Order status:
                                            <div class="d-inline text-success">{{ $order->order_status }}</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-outline-primary btn-sm" href="#" title="View Details"
                                    data-toggle="modal" data-target="#CustomerDetails_{{ $order->id }}">View Details</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
