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
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2">Justified Tabs</h6>
            <hr class="margin-bottom-1x">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#home2" data-toggle="tab" role="tab">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#profile2" data-toggle="tab" role="tab">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings2" data-toggle="tab" role="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home2" role="tabpanel">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                        retro synth
                        master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                        butcher retro
                        keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                        Aliquip placeat
                        salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                    </p>
                </div>
                <div class="tab-pane fade" id="profile2" role="tabpanel">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                        Exercitation +1
                        labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko
                        farm-to-table craft beer
                        twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                        vinyl
                        cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar
                        helvetica VHS
                        salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson
                        8-bit,
                        sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party
                        scenester
                        stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                </div>
                <div class="tab-pane fade" id="settings2" role="tabpanel">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                        master cleanse
                        gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party
                        locavore wolf
                        cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold
                        out
                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats
                        keffiyeh
                        craft beer marfa ethical. Wolf salvia freegan.</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
