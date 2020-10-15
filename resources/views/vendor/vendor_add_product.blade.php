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
                <a class="list-group-item with-badge" href="{{ route('shop.dashboard') }}"><i class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('shop.profile') }}"><i class="icon-head"></i>Shop
                    Profile</a>
                <a class="list-group-item active" href="#"><i class="icon-plus"></i>Add Product</a>
                <a class="list-group-item with-badge" href="{{ route('product.list')}}"><i class="icon-box"></i>My Products</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2">Justified Tabs</h6>
            <hr class="margin-bottom-1x">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#basic_details" data-toggle="tab" role="tab"><i class="icon-clipboard"></i>Basic Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#image" data-toggle="tab" role="tab"><i class="icon-image"></i>Images</a></li>
                <li class="nav-item"><a class="nav-link" href="#preview" data-toggle="tab" role="tab"><i class="icon-eye"></i>Preview</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="basic_details" role="tabpanel">
                    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                    <form class="row" action="" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input class="form-control" name="product_name" type="text" value="" id="product_name"
                                    required>
                            </div>
                            {{-- <div class="form-group">
                                <label for="account-state">State</label>
                                <select name="state" id="state" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="{{ $details->state }}" selected>{{ $details->state }}</option>
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
                            </div> --}}
                            <div class="form-group">
                                <label for="product_price">Price</label>
                                <input class="form-control" name="price" type="number" id="product_price" aria-describedby="helpId" autocomplete="off" min="0" required>
                                <small id="helpId" class="form-text text-muted">Price should be in INR (₹)</small>
                            </div>
                            <div class="form-group">
                                <label for="product_qty">Quantity</label>
                                <input class="form-control" name="qty" type="number" id="product_qty" autocomplete="off" min="0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_weight">Weight</label>
                                <input class="form-control" name="weight" type="number" aria-describedby="Weighthelp" id="product_weight" step="0.01" autocomplete="off" min="0" required>
                                <small id="Weighthelp" class="form-text text-muted">Weight should be in Kg</small>
                            </div>
                            <div class="form-group">
                                <label for="product_category">Category</label>
                                <select name="product_category" id="product_category" class="form-control" required>
                                    <option value="">select</option>
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
                                <input class="form-control" name="zip"  type="text" id="product_brand" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="product_status">Stock Status</label>
                              <select class="form-control" name="product_status" id="product_status">
                                <option>In Stock</option>
                                <option>Out Of Stock</option>
                                <option>Comming Soon</option>
                                <option>Currently Unavailable</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="product_discription">Discription</label>
                                <textarea class="form-control" name="discription" id="product_discription" cols="10" rows="5"
                                    placeholder="Say something about your Product..." required></textarea>
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
                    </form>
                </div>
                <div class="tab-pane fade" id="image" role="tabpanel">
                    <form action="/as" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="preview" role="tabpanel">
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
