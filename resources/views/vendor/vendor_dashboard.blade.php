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
                <a class="list-group-item with-badge active" href="#"><i class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('shop.profile') }}"><i class="icon-head"></i>Shop
                    Profile</a>
                <a class="list-group-item " href="{{ route('product.add') }}"><i class="icon-plus"></i>Add Product</a>
                <a class="list-group-item with-badge" href="{{ route('product.list')}}"><i class="icon-box"></i>My
                    Products</a>
                <a class="list-group-item with-badge" href="{{ route('MyOrders')}}"><i class="icon-archive"></i>My
                    Orders</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="d-flex justify-content-around">
                <div class="card border-primary w-25 dashboard1">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title text-white h6 text-nowrap">Number of Products</span>
                        @php
                        $product_count=App\Product::where('user_id',auth()->user()->id)->count();
                        @endphp
                        <p class="card-text text-white text-center h3">{{ $product_count }}</p>
                        <a href="{{ route('product.list')}}" class="">
                            <p class="card-text h6 text-white"><i class="icon-box">
                                    View Product List</i></p>
                        </a>
                    </div>
                </div>
                <div class="card border-success w-25 dashboard2">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title h6 text-nowrap">Profit Details</span>
                        @php
                        $orders_for_sum=App\Order::get();
                        $profit=0;
                        foreach ($orders_for_sum as $order_for_sum) {
                        $Orders=$order_for_sum->order_items;
                        foreach ($Orders as $Order)
                        {
                        if ($Order['associatedModel']['user_id']==auth()->user()->id)
                        {
                        $profit+=$Order['price'];
                        }
                        }
                        }

                        @endphp
                        <p class="card-text h3 text-center" id="profit">₹</p>
                        <a href="{{ route('MyOrders')}}" class="">
                            <p class="card-text h6 pt-2 text-danger"><i class="icon-bag"> View Order List</i></p>
                        </a>
                        <script>
                            var x={{ $profit }};
                            x=x.toString();
                            var lastThree = x.substring(x.length-3);
                            var otherNumbers = x.substring(0,x.length-3);
                            if(otherNumbers != '')
                            lastThree = ',' + lastThree;
                            var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                            // alert(res);
                            document.getElementById("profit").innerHTML = "₹ "+res;
                        </script>
                    </div>
                </div>
                <div class="card border-warning w-25 dashboard3">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title text-white h6 text-nowrap">Buyers Data Table</span>
                        <a href="#" class="">
                            <p class="card-text h5 text-white text-center pt-4"><i class="icon-head"> View List</i></p>
                        </a>
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
