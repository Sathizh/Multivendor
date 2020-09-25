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
                <a class="list-group-item with-badge" href="#modalScroll" data-toggle="modal" data-backdrop="false"><i
                        class="icon-tag"></i>Sell On Multi
                    Vendor</a>
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
                        {{-- <tr>
                                <td><a class="text-medium navi-link" href="#" data-toggle="modal"
                                        data-target="#orderDetails">34VB5540K83</a></td>
                                <td>July 21, 2017</td>
                                <td><span class="text-info">In Progress</span></td>
                                <td><span class="text-medium">$315.20</span></td>
                            </tr>
                            <tr>
                                <td><a class="text-medium navi-link" href="#" data-toggle="modal"
                                        data-target="#orderDetails">112P45A90V2</a></td>
                                <td>June 15, 2017</td>
                                <td><span class="text-warning">Delayed</span></td>
                                <td><span class="text-medium">$1,264.00</span></td>
                            </tr>
                            <tr>
                                <td><a class="text-medium navi-link" href="#" data-toggle="modal"
                                        data-target="#orderDetails">28BA67U0981</a></td>
                                <td>May 19, 2017</td>
                                <td><span class="text-success">Delivered</span></td>
                                <td><span class="text-medium">$198.35</span></td>
                            </tr>
                            <tr>
                                <td><a class="text-medium navi-link" href="#" data-toggle="modal"
                                        data-target="#orderDetails">502TR872W2</a></td>
                                <td>April 04, 2017</td>
                                <td><span class="text-success">Delivered</span></td>
                                <td><span class="text-medium">$2,133.90</span></td>
                            </tr>
                            <tr>
                                <td><a class="text-medium navi-link" href="#" data-toggle="modal"
                                        data-target="#orderDetails">47H76G09F33</a></td>
                                <td>March 30, 2017</td>
                                <td><span class="text-success">Delivered</span></td>
                                <td><span class="text-medium">$86.40</span></td>
                            </tr> --}}
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
