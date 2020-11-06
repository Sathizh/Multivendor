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
                            src="{{ asset('assets/img/account/user-ava.jpg') }}" alt="User"></div>
                    <div class="user-data">
                        <h4>{{ $details->shop_name }}</h4><span><b>Since
                            </b>{{ date('F d Y', strtotime($details->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge" href="{{ route('shop.dashboard') }}"><i
                        class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item active" href="{{ route('shop.profile') }}"><i class="icon-head"></i>Shop
                    Profile</a>
                <a class="list-group-item " href="{{ route('product.add') }}"><i class="icon-plus"></i>Add Product</a>
                <a class="list-group-item with-badge" href="{{ route('product.list')}}"><i class="icon-box"></i>My
                    Products</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <h4>Fill Your Shop Details</h4>
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <form class="row" action=" {{ route('shop.create') }} " method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Campany/Business Name</label>
                        <input class="form-control" name="shop_name" type="text" value="{{ $details->shop_name }}"
                            id="account-fn" required>
                    </div>
                    <div class="form-group">
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
                    </div>
                    <div class="form-group">
                        <label for="account-city">City</label>
                        <input class="form-control" name="city" type="text" id="account-city"
                            value="{{ $details->city }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fullAddress">Address</label>
                        <textarea class="form-control" name="address" id="account-fullAddress" cols="30" rows="10"
                            placeholder="Flat/House no./Company,Area,Streat" required>{{ $details->address }}</textarea>
                        {{-- <input class="form-control" type="text" id="account-fullAdress"
                                        value="{{ $details->fulladdress }}" required> --}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-Zip">Zip/Pin Code</label>
                        <input class="form-control" name="zip" pattern="[1-9][0-9]{5}" type="text" id="account-Zip"
                            value="{{ $details->zip }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input class="form-control" name="phone" type="text" id="account-phone"
                            value="{{ $details->phone }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">GST Number</label>
                        <input class="form-control" pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}"
                            title="Eg: 22AAAAA0000A1Z5" name="shop_GST" type="text" id="ggst"
                            value="{{ $details->shop_GST }}" readonly>
                    </div>
                    <div id="gst_error"></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Bank Account Number</label>
                        {{-- <input class="form-control" type="text" pattern="/^(?:[0-9]{11}|[0-9]{2}-[0-9]{3}-[0-9]{6})$/"
                        value="" required> --}}
                        <input class="form-control" name="bank_account" type="text" pattern="^\d{9,18}$"
                            value="{{ $details->bank_account }}" readonly>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="account-fullAddress">Discription</label>
                        <textarea class="form-control" name="discription" id="account-fullAddress" cols="10" rows="5"
                            placeholder="Say something about your Complany..."
                            required>{{ $details->discription }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">

                        </div>
                        <button class="btn btn-primary margin-right-none" id="create_shop" type="submit">Update
                            Shop details</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
