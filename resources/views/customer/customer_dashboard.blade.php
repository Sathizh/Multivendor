{{-- model --}}
<div class="modal fade" id="orderDetails" tabindex="-1" data-backdrop="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Order No - {{ $Orders[0]->id }}</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive shopping-cart mb-0">
                    <table class="table">
                        <thead>
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
                                                    Park<small>x 1</small></a></h4><span><em>Size:</em>
                                                10.5</span><span><em>Color:</em> Dark Blue</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">₹43.90</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                                src="{{ asset('assets/img/shop/cart/02.jpg') }}" alt="Product"></a>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="shop-single.html">Daily Fabric
                                                    Cap<small>x 2</small></a></h4><span><em>Size:</em>
                                                XL</span><span><em>Color:</em> Black</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">₹24.89</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                                src="{{ asset('assets/img/shop/cart/03.jpg') }}" alt="Product"></a>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="shop-single.html">Cole Haan
                                                    Crossbody<small>x 1</small></a></h4><span><em>Size:</em>
                                                -</span><span><em>Color:</em> Turquoise</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">₹200.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-2">
                    <div class="px-2 py-1">Subtotal: <span class='text-medium'>₹289.68</span></div>
                    <div class="px-2 py-1">Shipping: <span class='text-medium'>₹22.50</span></div>
                    <div class="px-2 py-1">Tax: <span class='text-medium'>₹3.42</span></div>
                    <div class="text-lg px-2 py-1">Total: <span class='text-medium'>₹315.60</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <a class="list-group-item with-badge active" href="#"><i class="icon-bag"></i>Orders</a>
                <a class="list-group-item" href="{{ route('customer.profile') }}"><i class="icon-head"></i>Profile</a>
                <a class="list-group-item" href="{{ route('customer.address') }}"><i class="icon-map"></i>Addresses</a>
                <a class="list-group-item with-badge" href="{{ route('wishlist') }}"><i
                        class="icon-heart"></i>Wishlist</a>
                @if (auth()->user()->role == 2)
                @php
                $self=\App\Shop::where('user_id',auth()->user()->id)->get();
                @endphp
                <a class="list-group-item with-badge" href=" {{ route('shop.profile') }} "><i
                        class="icon-tag"></i>{{ $self[0]->shop_name }}</a>
                @else
                <a class="list-group-item with-badge" href="#modalScroll" data-toggle="modal" data-backdrop="false"><i
                        class="icon-tag"></i>Sell On Multi
                    Vendor</a>

                @endif
            </nav>
        </div>
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="table-responsive">
                <table class="table table-hover margin-bottom-none">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Date Purchased</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($Orders))
                        @foreach ($Orders as $order)
                        <tr>
                            <td><a class="text-medium navi-link" href="#" data-toggle="modal"
                                    data-target="#orderDetails">{{ $order->id }}</a></td>
                            <td>{{ date('F d,Y',strtotime($order->created_at)) }}</td>
                            @if ($order->status=='paid')
                            <td><span class="text-success">{{ $order->status }}</span></td>
                            @else
                            <td><span class="text-danger">{{ $order->status }}</span></td>
                            @endif
                            <td><span class="text-medium">Rs.{{ $order->grand_total }}</span></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">

                                -- you are not make any orders right yet --
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>


@endsection
