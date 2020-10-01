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
