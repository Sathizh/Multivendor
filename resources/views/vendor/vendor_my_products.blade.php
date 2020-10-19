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
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a><img
                            src="{{ asset('assets/img/account/user-ava.jpg') }}" alt="User"></div>
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
                <a class="list-group-item with-badge active" href="{{ route('product.list')}}"><i class="icon-box"></i>My Products</a>
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
                            <th>Your products</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        @php
                            // dd($product->name);
                        @endphp
                        <tr>
                            <td>
                                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                            src="{{ asset('default.jpg') }}" alt="Product"></a>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="shop-single.html">{{ $product->name }}</a>
                                        </h4>
                                        <div class="text-lg text-medium text-muted">₹{{ $product->price }}</div>
                                        <div>Stock status:
                                            <div class="d-inline text-success">In Stock</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-outline-warning btn-sm"
                                    href="#" data-toggle="tooltip"
                                    title="Edit item">Edit</a>
                                <a class="btn btn-outline-danger btn-sm"
                                    href="#" data-toggle="tooltip"
                                    title="Remove item">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
