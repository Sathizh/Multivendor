@extends('layouts.unishop')


@section('content')
<div class="container">

    <h2>Checkout</h2>
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <!-- Checkout Adress-->
            <div class="col-xl-9 col-lg-8">

                <h4>Billing Address</h4>
                <hr class="padding-bottom-1x">
                @if (session('no-data'))
                    <form class="row" action="{{route('orders.store')}}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-fn">Name</label>
                                <input class="form-control" name="shipping_fullname" type="text" id="account-fn"
                                    value="{{ auth()->user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="account-state">State</label>
                                <select name="shipping_state" id="state" class="form-control" required>
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
                                <input class="form-control" name="shipping_city" type="text" id="account-city"
                                    value="{{ $details[0]->city }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-fullAddress">Address</label>
                                <textarea class="form-control" name="shipping_address" id="account-fullAddress" cols="30" rows="10"
                                    placeholder="Flat/House no./Company,Area,Streat" required>{{ $details[0]->full_address }}</textarea>
                                {{-- <input class="form-control" type="text" id="account-fullAdress"
                                                                value="{{ $details->fulladdress }}" required> --}}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-Zip">Zip</label>
                                <input class="form-control" name="shipping_zipcode" type="text" id="account-Zip"
                                    value="{{ $details[0]->zip }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-phone">Phone Number</label>
                                <input class="form-control" name="shipping_phone" type="text" id="account-phone"
                                    value="{{ auth()->user()->phone }}" readonly>
                            </div>
                        </div>
                        {{-- <div class="col-12">
                                            <hr class="mt-2 mb-3">
                                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="custom-control custom-checkbox d-block">

                                                </div>
                                                <button class="btn btn-primary margin-right-none" type="submit">Update Address</button>
                                            </div>
                                        </div> --}}

                        {{-- <h4>Shipping Address</h4>
                                    <hr class="padding-bottom-1x">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="same_address" checked>
                                            <label class="custom-control-label" for="same_address">Same as billing address</label>
                                        </div>
                                    </div> --}}
                        <h4>Payment Method</h4>
                        <hr class="padding-bottom-1x">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="payment_method" id="payment_method"
                                            value="Cash on delivery" checked>
                                        Cash On Delivery
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="payment_method" id="payment_method"
                                            value="stripe">
                                        Stripe
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-footer">
                            <div class="column"><a class="btn btn-outline-secondary" href="{{ route('cart.index') }}"><i
                                        class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back To
                                        Cart</span></a>
                            </div>
                            <div class="column">
                                <button type="submit" class="btn btn-primary"><span class="hidden-xs-down">Continue&nbsp;</span><i
                                        class="icon-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                @else
                <form class="row" action="{{route('orders.store')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Name</label>
                            <input class="form-control" name="shipping_fullname" type="text" id="account-fn"
                                value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="account-state">State</label>
                            <select name="shipping_state" id="state" class="form-control" required>
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
                            <input class="form-control" name="shipping_city" type="text" id="account-city"
                                value="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fullAddress">Address</label>
                            <textarea class="form-control" name="shipping_address" id="account-fullAddress" cols="30"
                                rows="10" placeholder="Flat/House no./Company,Area,Streat"
                                required></textarea>
                            {{-- <input class="form-control" type="text" id="account-fullAdress"
                                            value="{{ $details->fulladdress }}" required> --}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-Zip">Zip</label>
                            <input class="form-control" name="shipping_zipcode" type="text" id="account-Zip"
                                value="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Phone Number</label>
                            <input class="form-control" name="shipping_phone" type="text" id="account-phone"
                                value="{{ auth()->user()->phone }}" readonly>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox d-block">

                            </div>
                            <button class="btn btn-primary margin-right-none" type="submit">Update Address</button>
                        </div>
                    </div> --}}

                    {{-- <h4>Shipping Address</h4>
                <hr class="padding-bottom-1x">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="same_address" checked>
                        <label class="custom-control-label" for="same_address">Same as billing address</label>
                    </div>
                </div> --}}
                    <h4>Payment Method</h4>
                    <hr class="padding-bottom-1x">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="payment_method"
                                        id="payment_method" value="Cash on delivery" checked>
                                    Cash On Delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="payment_method"
                                        id="payment_method" value="stripe">
                                    Stripe
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-footer">
                        <div class="column"><a class="btn btn-outline-secondary" href="{{ route('cart.index') }}"><i
                                    class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back To
                                    Cart</span></a>
                        </div>
                        <div class="column">
                            <button type="submit" class="btn btn-primary"><span
                                    class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
            <!-- Sidebar          -->
            <div class="col-xl-3 col-lg-4">
                <aside class="sidebar">
                    <div class="padding-top-2x hidden-lg-up"></div>
                    <!-- Order Summary Widget-->
                    <section class="widget widget-order-summary">
                        <h3 class="widget-title">Order Summary</h3>
                        <table class="table">
                            <tr>
                                <td>Cart Subtotal:</td>
                                <td class="text-medium">₹{{\Cart::session(auth()->id())->getTotal()}}.00</td>
                            </tr>
                            <tr>
                                <td>Shipping:</td>
                                <td class="text-medium">₹50.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-lg text-medium">₹{{\Cart::session(auth()->id())->getTotal()+50}}.00</td>
                            </tr>
                        </table>
                    </section>
                    <!-- Featured Products Widget-->
                    <section class="widget widget-featured-products">
                        <h3 class="widget-title">Recently Viewed</h3>
                        <!-- Entry-->
                        <div class="entry">
                            <div class="entry-thumb"><a href="shop-single.html"><img src="{{ asset('default.jpg') }}"
                                        alt="Product"></a></div>
                            <div class="entry-content">
                                <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span
                                    class="entry-meta">₹155.00</span>
                            </div>
                        </div>
                        <!-- Entry-->
                        <div class="entry">
                            <div class="entry-thumb"><a href="shop-single.html"><img src="{{ asset('default.jpg') }}"
                                        alt="Product"></a></div>
                            <div class="entry-content">
                                <h4 class="entry-title"><a href="shop-single.html">Top-Sider Fathom</a></h4><span
                                    class="entry-meta">₹90.00</span>
                            </div>
                        </div>
                        <!-- Entry-->
                        <div class="entry">
                            <div class="entry-thumb"><a href="shop-single.html"><img src="{{ asset('default.jpg') }}"
                                        alt="Product"></a></div>
                            <div class="entry-content">
                                <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span
                                    class="entry-meta">₹49.50</span>
                            </div>
                        </div>
                        <!-- Entry-->
                        <div class="entry">
                            <div class="entry-thumb"><a href="shop-single.html"><img src="{{ asset('default.jpg') }}"
                                        alt="Product"></a></div>
                            <div class="entry-content">
                                <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span
                                    class="entry-meta">₹29.99</span>
                            </div>
                        </div>
                    </section>
                    <!-- Promo Banner-->
                    <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span
                            class="overlay-dark" style="opacity: .4;"></span>
                        <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                            <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                            <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a
                                class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</div>

@endsection
