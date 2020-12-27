{{-- cancel confirm model --}}
<div class="modal fade" id="orderDetailsCancel" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirm Alert</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="text-center h5"
                    style="box-sizing: border-box; color: rgb(255, 0, 0); font-weight: bold; text-shadow: rgb(255, 0, 0) 5px 2px 12px;">
                    Are you sure, You want to Cancel the item
                    ?</p>
                <br>
                <h6 class="text-center"
                    style="box-sizing: border-box; color: rgb(0,255,0); font-weight: bold; text-shadow: rgb(0, 255, 0) 5px 2px 12px;">
                    OnePlus Nord 5G (Blue Marble, 8GB RAM, 128GB Storage)
                </h6>
            </div>
            <div class="modal-footer">
                <form action="/delete_product" method="get">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                    <input type="hidden" name="id" value="">
                    <input type="submit" value="Yes I'm" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>
{{-- model --}}
@if (count($Orders))
@foreach ($Orders as $order)
<div class="modal fade" id="orderDetails_{{ $order->id }}" tabindex="-1" data-backdrop="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Order No - {{ $order->id }}</h4>
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
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $pro=$order->order_items;
                            $sub_total=0;
                            foreach ($pro as $item) {
                            $sub_total+=$item['price'];
                            }
                            @endphp
                            @foreach ($pro as $item)

                            @php
                            $img= App\Image::where('product_id',$item['id'])->get();
                            @endphp
                            <tr>
                                <td>
                                    <div class="product-item"><a class="product-thumb"
                                            href="{{ route('details',$item['id']) }}"><img
                                                src="/assets/img/product_img/{{ $img[0]->file_name }}"
                                                alt="Product"></a>
                                        <div class="product-info">
                                            <h4 class="product-title"><a
                                                    href="{{ route('details',$item['id']) }}">{{ $item['name'] }}<small>x
                                                        {{ $item['quantity'] }}</small></a></h4><span><em>Brand:</em>
                                                {{ $item['associatedModel']['product_brand'] }}</span>
                                            <span><em>Date: {{ $order->created_at }}</em></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">₹ {{ $item['price'] }}</td>
                                <td>
                                    <a class="btn btn-outline-danger btn-sm text-center" href="#" data-toggle="modal"
                                        data-target="#orderDetailsCancel">Cancel</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <hr class="mb-3">
                @if ($order->order_status=="Confirmed Order")
                <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                    <div class="step completed">
                        <div class="step-icon-wrap">
                            <div class="step-icon mt-2"><i class="pe-7s-cart"></i></div>
                        </div>
                        <h4 class="step-title">Confirmed Order</h4>
                    </div>
                    <div class="step">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-config"></i></div>
                        </div>
                        <h4 class="step-title">Processing Order</h4>
                    </div>
                    <div class="step">
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
                @elseif($order->order_status=="Processing Order")
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
                    <div class="step">
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
                @elseif($order->order_status=="Quality Check")
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
                @elseif($order->order_status=="Product Dispatched")
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
                    <div class="step completed">
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
                @else
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
                    <div class="step completed">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-car"></i></div>
                        </div>
                        <h4 class="step-title">Product Dispatched</h4>
                    </div>
                    <div class="step completed">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-home"></i></div>
                        </div>
                        <h4 class="step-title">Product Delivered</h4>
                    </div>
                </div>
                @endif
                <hr class="mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-2">
                    <div class="px-2 py-1">Subtotal: <span class='text-medium'>₹ {{ $sub_total }}</span></div>
                    <div class="px-2 py-1">Shipping: <span class='text-medium'>₹ - </span></div>
                    <div class="px-2 py-1">Tax: <span class='text-medium'>₹ -</span></div>
                    <div class="text-lg px-2 py-1">Total: <span class='text-medium'>₹ {{ $sub_total }}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
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
                    <div class="user-avatar">
                        <form action="/new_profile_change" id="profile_change" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <a class="edit-avatar" id="profile_tog"></a>
                            <input type="file" class="edit-avatar d-none" name="new_profile_photo"
                                id="profile_update_trig" href="#">
                        </form>
                        <img src="assets/img/profile_img/{{ auth()->user()->profile_photo }}" alt="User">
                    </div>
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
                                    data-target="#orderDetails_{{ $order->id }}">{{ $order->id }}</a></td>
                            <td>{{ date('F d,Y',strtotime($order->created_at)) }}</td>
                            @if ($order->payment_status=='paid')
                            <td><span class="text-success">{{ $order->payment_status }}</span></td>
                            @else
                            <td><span class="text-danger">{{ $order->payment_status }}</span></td>
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
