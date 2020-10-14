@extends('layouts.unishop')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-cover" style="background-image: url(assets/img/account/user-cover-img.jpg);">
                    {{-- <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend">
                            <i class="icon-medal"></i>290 points</div> --}}
                </div>
                <div class="user-info">
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a><img
                            src="assets/img/account/user-ava.jpg" alt="User"></div>
                    <div class="user-data">
                        <h4>{{ auth()->user()->name }}</h4><span><b>Joined
                            </b>{{ date('F d Y', strtotime(auth()->user()->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge" href="#"><i class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item" href="{{ route('customer.profile') }}"><i class="icon-head"></i>Profile</a>
                <a class="list-group-item" href="{{ route('customer.address') }}"><i class="icon-map"></i>Addresses</a>
                <a class="list-group-item with-badge active" href="#"><i class="icon-heart"></i>Whishlist</a>
                <a class="list-group-item with-badge" href="#modalScroll" data-toggle="modal" data-backdrop="false"><i
                        class="icon-tag"></i>Sell On Multi
                    Vendor</a>
            </nav>
        </div>
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="table-responsive wishlist-table margin-bottom-none">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th class="text-center"><a class="btn btn-sm btn-outline-danger"
                                    href="{{ route('wishlist.clear') }}">Clear Wishlist</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $item)
                        @php
                        $product=App\Product::find($item->product_id);
                        @endphp

                        <tr>
                            <td>
                                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                            src="{{ asset('default.jpg') }}" alt="Product"></a>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="shop-single.html">{{ $product->name }}</a>
                                        </h4>
                                        <div class="text-lg text-medium text-muted">₹{{ $product->price }}</div>
                                        <div>Availability:
                                            <div class="d-inline text-success">In Stock</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><a class="remove-from-cart"
                                    href="{{ route('wishlist.add_or_remove', $product->id) }}" data-toggle="tooltip"
                                    title="Remove item"><i class="icon-cross"></i></a></td>
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
