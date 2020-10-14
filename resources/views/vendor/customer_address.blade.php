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
                <a class="list-group-item with-badge" href="{{ route('customer.orders') }}"><i
                        class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item" href="{{ route('customer.profile') }}"><i class="icon-head"></i>Profile</a>
                <a class="list-group-item active" href="#"><i class="icon-map"></i>Addresses</a>
                <a class="list-group-item with-badge" href="{{ route('wishlist') }}"><i
                        class="icon-heart"></i>Wishlist</a>
                <a class="list-group-item with-badge" href="#modalScroll" data-toggle="modal" data-backdrop="false"><i
                        class="icon-tag"></i>Sell On Multi
                    Vendor</a>
            </nav>
        </div>


        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            @if (!count($details))
            <form class="row" action="/customer_address_update" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Name</label>
                        <input class="form-control" name="name" type="text" id="account-fn"
                            value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="account-state">State</label>
                        <select name="state" id="state" class="form-control" required>
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
                    <div class="form-group">
                        <label for="account-city">City</label>
                        <input class="form-control" name="city" type="text" id="account-city" value="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fullAddress">Address</label>
                        <textarea class="form-control" name="address" id="account-fullAddress" cols="30" rows="10"
                            placeholder="Flat/House no./Company,Area,Streat" required></textarea>
                        {{-- <input class="form-control" type="text" id="account-fullAdress"
                                        value="{{ $details->fulladdress }}" required> --}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-Zip">Zip/Pin Code</label>
                        <input class="form-control" name="zip" type="text" id="account-Zip" value="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input class="form-control" type="text" id="account-phone" value="{{ auth()->user()->phone }}"
                            readonly>
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">

                        </div>
                        <button class="btn btn-primary margin-right-none" type="submit">Update Address</button>
                    </div>
                </div>
            </form>
            @else
            <form class="row" action="/customer_address_update" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Name</label>
                        <input class="form-control" name="name" type="text" id="account-fn"
                            value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="account-state">State</label>
                        <select name="state" id="state" class="form-control" required>
                            <option value="{{ $details[0]->state }}" selected>{{ $details[0]->state }}</option>
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
                            value="{{ $details[0]->city }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fullAddress">Address</label>
                        <textarea class="form-control" name="address" id="account-fullAddress" cols="30" rows="10"
                            placeholder="Flat/House no./Company,Area,Streat"
                            required>{{ $details[0]->full_address }}</textarea>
                        {{-- <input class="form-control" type="text" id="account-fullAdress"
                            value="{{ $details->fulladdress }}" required> --}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-Zip">Zip/Pin Code</label>
                        <input class="form-control" name="zip" type="text" id="account-Zip"
                            value="{{ $details[0]->zip }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input class="form-control" type="text" id="account-phone" value="{{ auth()->user()->phone }}"
                            readonly>
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">

                        </div>
                        <button class="btn btn-primary margin-right-none" type="submit">Update Address</button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
