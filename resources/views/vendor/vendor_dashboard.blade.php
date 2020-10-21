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
                <a class="list-group-item with-badge active" href="#"><i class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('shop.profile') }}"><i class="icon-head"></i>Shop
                    Profile</a>
                <a class="list-group-item " href="{{ route('product.add') }}"><i class="icon-plus"></i>Add Product</a>
                <a class="list-group-item with-badge" href="#"><i class="icon-box"></i>My Products</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="d-flex justify-content-around">
                <div class="card border-primary w-25 dashboard1">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-white">Number of Products</h4>
                        <p class="card-text text-white">183</p>
                    </div>
                </div>
                <div class="card border-success w-25 dashboard2">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Profit Details</h4>
                        <p class="card-text ">₹27,503,00</p>
                    </div>
                </div>
                <div class="card border-warning w-25 dashboard3">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-white">Buyer Data Table</h4>
                        <p class="card-text"><i class="icon-head">View List</i></p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-around pt-5">
                <div class="card border-danger w-50">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Product Progress Details</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100">50%</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
