@extends('layouts.unishop')
@section('content')

<!-- Page Content-->
<div class="container padding-bottom-3x mb-2 mt-5">
    {{-- toast --}}
    <button class="btn btn-outline-secondary" id="field_empty_warning" data-toast="" data-toast-position="topRight"
        data-toast-type="warning" data-toast-icon="icon-flag" data-toast-title="Warning"
        data-toast-message="Plsase fill all the Basic details & Select Images">Warning
        Bottom Right</button>
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
                <a class="list-group-item active" href="#"><i class="icon-cloud-upload"></i>Edit Product</a>
                <a class="list-group-item with-badge" href="{{ route('product.list')}}"><i class="icon-box"></i>My
                    Products</a>
                <a class="list-group-item with-badge" href="{{ route('MyOrders')}}"><i class="icon-archive"></i>My
                    Orders</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="b_d" href="#basic_details" data-toggle="tab"
                        role="tab"><i class="icon-clipboard"></i>Basic Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#image" data-toggle="tab" role="tab"><i
                            class="icon-image"></i>Images</a></li>
                <li class="nav-item"><a class="nav-link" href="#preview" data-toggle="tab" role="tab"><i
                            class="icon-eye"></i>Preview</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="basic_details" role="tabpanel">
                    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                    <form class="row" action="/edit_product/{{ $product->id }}" id="edit_product" method="get"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input class="form-control" name="product_name" type="text" value="{{ $product->name }}"
                                    id="product_name" aria-describedby="helpId1" required>
                                <small id="helpId1" class="form-text text-muted">if a product containt any Model Number
                                    then
                                    include that Name itself</small>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Price</label>
                                <input class="form-control" name="price" value="{{ $product->price }}" type="number"
                                    id="product_price" aria-describedby="helpId" autocomplete="off" min="0" required>
                                <small id="helpId" class="form-text text-muted">Price should be in INR (₹)</small>
                            </div>
                            <div class="form-group">
                                <label for="product_qty">Quantity</label>
                                <input class="form-control" name="qty" value="{{ $product->quantity }}" type="number"
                                    id="product_qty" autocomplete="off" min="0" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_weight">Weight</label>
                                <div class="d-flex ">
                                    <input class="form-control rounded-0 rounded-left border-right-0 without_arrow"
                                        name="product_weight" type="number" value="{{ $product->product_weight }}"
                                        aria-describedby="Weighthelp" id="product_weight" step="0.01" autocomplete="off"
                                        min="0" required>
                                    <select name="product_measur" id="product_measur"
                                        class="form-control w-25 rounded-0 border-left-0">
                                        <option value="{{ $product->product_measur }}" selected>
                                            {{ $product->product_measur }}</option>
                                        <option value="Kg">Kg -kilo Gram</option>
                                        <option value="g">g -Gram</option>
                                        <option value="ml">ml -milli litter</option>
                                        <option value="l">l -litter</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="product_category">Category</label>
                                <select name="product_category" id="product_category" class="form-control" required>
                                    <option value="{{ $product->product_category }}" selected>
                                        {{ $product->product_category }}
                                    </option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_brand">Brand</label>
                                <input class="form-control" name="product_brand" value="{{ $product->product_brand }}"
                                    type="text" id="product_brand" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_status">Stock Status</label>
                                <select class="form-control" name="product_status" id="product_status">
                                    <option value="{{ $product->product_status }}" selected>
                                        {{ $product->product_status }}
                                    </option>
                                    <option value="In Stock">In Stock</option>
                                    <option value="Out of Stock">Out Of Stock</option>
                                    <option value="Comming Soon">Comming Soon</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr class="mt-2 mb-3">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox d-block">

                                </div>
                                {{-- <button class="btn btn-primary margin-right-none" id="create_shop" type="submit"></button> --}}
                            </div>
                        </div>
                        <input type="hidden" name="product_discription" id="product_discription"
                            value="{{ $product->description }}">

                </div>
                {{-- image --}}
                <div class="tab-pane fade mb-5" id="image" role="tabpanel">
                    <div class="fallback">
                        <input type="file" id="ad_product_img" name="product_img[]" multiple required />
                    </div>
                    </form>
                </div>



                {{-- preview --}}
                <div class="tab-pane fade" id="preview" role="tabpanel">
                    <div class="row">
                        <!-- Poduct Gallery-->
                        <div class="col-md-6">
                            <div class="product-gallery"><span class="product-badge" style="color: green"
                                    id="product_preview_status">In
                                    Stock</span>
                                @php
                                $imgs=\App\Image::where('product_id',$product->id)->get();
                                $counter1=0;
                                $counter2=0;
                                @endphp
                                @if (count($imgs))
                                <div class="product-carousel owl-carousel gallery-wrapper">
                                    @foreach ($imgs as $img)
                                    @php
                                    $counter1+=1;
                                    @endphp
                                    <div class="gallery-item" data-hash="{{ $counter1 }}"><a
                                            href="/assets/img/product_img/{{ $img->file_name }}"
                                            data-size="1000x667"><img
                                                src="/assets/img/product_img/{{ $img->file_name }}" alt="Product"></a>
                                    </div>
                                    @endforeach
                                </div>
                                <ul class="product-thumbnails">
                                    @foreach ($imgs as $img)
                                    @php
                                    $counter2+=1;
                                    @endphp
                                    <li class="active"><a href="#{{ $counter2 }}"><img
                                                src="/assets/img/product_img/{{ $img->file_name }}" alt="Product"></a>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <div class="product-carousel owl-carousel gallery-wrapper">
                                    @php
                                    $counter1+=1;
                                    // dd("sample else");
                                    @endphp
                                    <div class="gallery-item" data-hash="{{ $counter1 }}"><a
                                            href="{{ asset('default.jpg') }}" data-size="1000x667"><img
                                                src="{{ asset('default.jpg') }}" alt="Product"></a>
                                    </div>
                                </div>
                                <ul class="product-thumbnails">
                                    @php
                                    $counter2+=1;
                                    @endphp
                                    <li class="active"><a href="#{{ $counter2 }}"><img src="{{ asset('default.jpg') }}"
                                                alt="Product"></a></li>
                                </ul>
                                @endif
                            </div>

                        </div>
                        <!-- Product Info-->
                        <div class="col-md-6">
                            <div class="padding-top-2x mt-2 hidden-md-up"></div>
                            <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i
                                    class="icon-star filled"></i><i class="icon-star filled"></i><i
                                    class="icon-star"></i>
                            </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span>
                            <h2 class="padding-top-1x text-normal" id="product_preview_name">Your Product name here</h2>
                            <span class="h2 d-block" id="product_preview_price">
                                ₹000.00</span>


                            <span id="product_preview_brand"><b>Brand:</b>Your Brand Here</span><br>
                            <span><b>Weight:</b><span id="product_preview_weight"> 2</span> <span
                                    id="product_preview_measur">Kg</span></span><br>
                            <span><b>Vendor :</b> {{ $details->shop_name }}</span>
                            <hr class="mb-3">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                                    <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#"
                                            data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                                class="socicon-facebook"></i></a><a
                                            class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip"
                                            data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a
                                            class="social-button shape-circle sb-instagram" href="#"
                                            data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                                class="socicon-instagram"></i></a><a
                                            class="social-button shape-circle sb-google-plus" href="#"
                                            data-toggle="tooltip" data-placement="top" title="Google +"><i
                                                class="socicon-googleplus"></i></a></div>
                                </div>
                                <div class="sp-buttons mt-2 mb-2">
                                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                        title="Whishlist"><i class="icon-heart"></i></button>
                                    <button class="btn btn-primary disabled" data-toast-type="success"
                                        data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                        data-toast-title="Product" data-toast-message="successfuly added to cart!"><i
                                            class="icon-bag"></i> Add to Cart</button>
                                </div>
                            </div>

                        </div>
                        <div id="data_show"></div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <h3 for="product_preview_discription">Discription</h3>

                                <textarea class="form-control" name="discription" id="product_preview_discription"
                                    cols="10" rows="5" placeholder="Say something about your Product..."
                                    required></textarea>
                                <script>
                                    CKEDITOR.replace( 'discription' );
                                </script>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 pt-3">
                            <hr>
                            <div class="float-right">
                                <button class="btn btn-primary margin-right-none" id="edit_product_btn" type="submit"><i
                                        class="icon-cloud-upload"></i>
                                    Edit Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
