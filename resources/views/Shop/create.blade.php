@extends('layouts.unishop')
@section('content')
<div class="container">
    <div class="col-lg pt-5">
        <h4>Fill Your Shop Details</h4>
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <form class="row" action=" {{ route('shop.create') }} " method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-fn">Cpmpany/Business Name</label>
                    <input class="form-control" name="name" type="text" id="account-fn" required>
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
                    <input class="form-control" name="zip" pattern="[1-9][0-9]{5}" type="text" id="account-Zip" value=""
                        required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-phone">Phone Number</label>
                    <input class="form-control" name="phone" type="text" id="account-phone" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-phone">GST Number</label>
                    <input class="form-control" pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}"
                        title="Eg: 22AAAAA0000A1Z5" name="gst" type="text" id="account-phone" value="" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-phone">Bank Account Number</label>
                    {{-- <input class="form-control" type="text" pattern="/^(?:[0-9]{11}|[0-9]{2}-[0-9]{3}-[0-9]{6})$/"
                        value="" required> --}}
                    <input class="form-control" name="bank" type="text" pattern="^\d{9,18}$"
                        value="" required>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="account-fullAddress">Discription</label>
                    <textarea class="form-control" name="discription" id="account-fullAddress" cols="10" rows="5"
                        placeholder="Say something about your Complany..." required></textarea>
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
    </div>
</div>

@endsection
