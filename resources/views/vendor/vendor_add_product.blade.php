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
                <a class="list-group-item active" href="#"><i class="icon-plus"></i>Add Product</a>
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
                    <form class="row" action="/add_product" id="addd_product" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input class="form-control" name="product_name" type="text" value="" id="product_name"
                                    aria-describedby="helpId1" required>
                                <small id="helpId1" class="form-text text-muted">if a product containt any Model Number
                                    then
                                    include that Name itself</small>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Price</label>
                                <input class="form-control" name="price" type="number" id="product_price"
                                    aria-describedby="helpId" autocomplete="off" min="0" required>
                                <small id="helpId" class="form-text text-muted">Price should be in INR (₹)</small>
                            </div>
                            <div class="form-group">
                                <label for="product_qty">Quantity</label>
                                <input class="form-control" name="qty" type="number" id="product_qty" autocomplete="off"
                                    min="0" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_weight">Weight</label>
                                <div class="d-flex ">
                                    <input class="form-control rounded-0 rounded-left border-right-0 without_arrow"
                                        name="product_weight" type="number" aria-describedby="Weighthelp"
                                        id="product_weight" step="0.01" autocomplete="off" min="0" required>
                                    <select name="product_measur" id="product_measur"
                                        class="form-control w-25 rounded-0 border-left-0">
                                        <option value="Kg">Kg -kilo Gram</option>
                                        <option value="g">g -Gram</option>
                                        <option value="ml">ml -milli litter</option>
                                        <option value="l">l -litter</option>
                                        {{-- <option value="ml">ml</option> --}}
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="product_category">Category</label>
                                <select name="product_category" id="product_category" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="Mobiles and Tablets">Mobiles and Tablets</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Consumer Electronics">Consumer Electronics</option>
                                    <option value="Books">Books</option>
                                    <option value="Baby Products">Baby Products</option>
                                    <option value="Groceries">Groceries</option>
                                    <option value="Food Takeaway/Delivery">Food Takeaway/Delivery</option>
                                    <option value="Home Furnishings">Home Furnishings</option>
                                    <option value="Jewelry">Jewelry</option>
                                    <option value="Toys">Toys</option>
                                    <option value="Sun Glasses">Sun Glasses</option>
                                    <option value="Face Masks">Face Masks</option>
                                    <option value="Gym Equipment">Gym Equipment</option>
                                    <option value="Home and Garden">Home and Garden</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_brand">Brand</label>
                                <input class="form-control" name="product_brand" type="text" id="product_brand"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_status">Stock Status</label>
                                <select class="form-control" name="product_status" id="product_status">
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
                        <input type="hidden" name="product_discription" id="product_discription" value="No Discription">

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

                                <div class="product-carousel owl-carousel gallery-wrapper">
                                    <div class="gallery-item " data-hash="one"><a class="product_preview_image_slider"
                                            href="{{ asset('default.jpg') }}" data-size="900x667"><img
                                                class="product_preview_image" src="{{ asset('default.jpg') }}"
                                                alt="Product"></a></div>
                                    <div class="gallery-item" data-hash="two"><a class="product_preview_image_slider"
                                            href="{{ asset('default.jpg') }}" data-size="900x667"><img
                                                class="product_preview_image" src="{{ asset('default.jpg') }}"
                                                alt="Product"></a></div>
                                    <div class="gallery-item" data-hash="three"><a class="product_preview_image_slider"
                                            href="{{ asset('default.jpg') }}" data-size="900x667"><img
                                                class="product_preview_image" src="{{ asset('default.jpg') }}"
                                                alt="Product"></a></div>
                                    <div class="gallery-item" data-hash="four"><a class="product_preview_image_slider"
                                            href="{{ asset('default.jpg') }}" data-size="900x667"><img
                                                class="product_preview_image" src="{{ asset('default.jpg') }}"
                                                alt="Product"></a></div>
                                    <div class="gallery-item" data-hash="five"><a class="product_preview_image_slider"
                                            href="{{ asset('default.jpg') }}" data-size="900x667"><img
                                                class="product_preview_image" src="{{ asset('default.jpg') }}"
                                                alt="Product"></a></div>
                                </div>

                                <ul class="product-thumbnails">
                                    <li class="active"><a href="#one"><img class="product_preview_image_thumb"
                                                src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                                    <li><a href="#two"><img class="product_preview_image_thumb"
                                                src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                                    <li><a href="#three"><img class="product_preview_image_thumb"
                                                src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                                    <li><a href="#four"><img class="product_preview_image_thumb"
                                                src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                                    <li><a href="#five"><img class="product_preview_image_thumb"
                                                src="{{ asset('default.jpg') }}" alt="Product"></a></li>
                                </ul>
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
                                <h3 for="product_preview_discription">Description</h3>

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
                                <button class="btn btn-primary margin-right-none" id="add_product" type="submit"><i
                                        class="icon-plus"></i>
                                    Add Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
