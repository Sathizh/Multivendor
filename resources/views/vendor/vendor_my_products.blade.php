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
                <a class="list-group-item with-badge active" href="{{ route('product.list')}}"><i
                        class="icon-box"></i>My Products</a>
                <a class="list-group-item with-badge" href="{{ route('MyOrders')}}"><i class="icon-archive"></i>My
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
                            <th>Your products</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products)
                        @foreach ($products as $product)
                        @php
                        // dd($product->name);
                        @endphp
                        @if ($product->is_alive==true)
                        <tr>
                            <td>
                                @php
                                $img= App\Image::where('product_id',$product->id)->get();
                                @endphp
                                <div class="product-item"><a class="product-thumb"
                                        href="{{ route('details',$product->id) }}"><img
                                            src="/assets/img/product_img/{{ $img[0]->file_name }}" alt="Product"></a>
                                    <div class="product-info">
                                        <h4 class="product-title"><a
                                                href="{{ route('details',$product->id) }}">{{ $product->name }}</a>
                                        </h4>
                                        <div class="text-lg text-medium text-muted">₹{{ $product->price }}</div>
                                        <div>Stock status:
                                            <div class="d-inline text-success">In Stock</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center d-flex">
                                <a class="btn btn-outline-warning btn-sm"
                                    href="{{ route('product.edit',$product->id) }}" data-toggle="tooltip"
                                    title="Edit item">Edit</a>
                                <a class="btn btn-outline-danger btn-sm ml-3" href="#" data-toggle="modal"
                                    data-target="#modalCentered_{{ $product->id }}">Delete</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @else
                        <tr class="text-center h6">
                            <td>
                                <-- You don't have any Products -->
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
{{-- conirm model --}}
<!-- Vertically Centered Modal-->
@foreach ($products as $product)
<div class="modal fade" id="modalCentered_{{ $product->id }}" tabindex="-1" role="dialog">
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
                    Are you sure, You want to delete the item
                    ?</p>
                <br>
                <h6 class="text-center"
                    style="box-sizing: border-box; color: rgb(0,255,0); font-weight: bold; text-shadow: rgb(0, 255, 0) 5px 2px 12px;">
                    " {{ $product->name }} "</h6>
            </div>
            <div class="modal-footer">
                <form action="/delete_product" method="get">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="submit" value="Yes I'm" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
