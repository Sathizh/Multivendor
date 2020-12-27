@extends('layouts.unishop')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row">
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
                        <img src="../../assets/img/profile_img/{{ auth()->user()->profile_photo }}" alt="User">
                    </div>
                    <div class="user-data">
                        <h4>{{ auth()->user()->name }}</h4><span><b>Since
                            </b>{{ date('F d Y', strtotime(auth()->user()->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge" href="{{ route('admin.dashboard') }}"><i
                        class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('admin.profile') }}"><i class="icon-head"></i>My
                    Profile</a>
                <a class="list-group-item " href="{{ route('admin.add_category') }}"><i class="icon-plus"></i>Add
                    Category</a>
                <a class="list-group-item with-badge active" href="{{ route('MyOrders')}}"><i
                        class="icon-clipboard"></i>Maintenance & Approval</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" id="ex-radio-1" name="radio2" checked>
                    <label class="custom-control-label" for="ex-radio-1">Customer List</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" id="ex-radio-2" name="radio2">
                    <label class="custom-control-label" for="ex-radio-2">Vendor List</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline float-right">
                    <input class="custom-control-input" type="radio" id="ex-radio-3" name="radio2">
                    <label class="custom-control-label text-danger" for="ex-radio-3">Shop Approval</label>
                </div>
            </div>
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <div class="table-responsive wishlist-table margin-bottom-none">
                {{-- customer_table --}}
                <table id="customer_table" class="table text-center table-striped table-bordered dt-responsive nowrap"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Active Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    @php
                    $users=App\User::all()->where('role',3);
                    @endphp
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            @if ($user->is_active)
                            <td>Active</td>
                            <td><a href="{{ route('status.change',$user->id) }}"
                                    class="btn btn-danger btn-sm rounded-0 px-2"><i class="icon-cross"></i>
                                    De-Activate</a></td>
                            @else
                            <td>In-Active</td>
                            <td><a href="{{ route('status.change',$user->id) }}"
                                    class="btn btn-success btn-sm rounded-0"><i class="icon-check"></i> Activate</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- vendor_table --}}
                <table id="vendor_table"
                    class="d-none table text-center table-striped table-bordered dt-responsive nowrap"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Active Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    @php
                    $users=App\User::all()->where('role',2);
                    @endphp
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            @if ($user->is_active)
                            <td>Active</td>
                            <td><a href="{{ route('status.change',$user->id) }}"
                                    class="btn btn-danger btn-sm rounded-0 px-2"><i class="icon-cross"></i>
                                    De-Activate</a></td>
                            @else
                            <td>In-Active</td>
                            <td><a href="{{ route('status.change',$user->id) }}"
                                    class="btn btn-success btn-sm rounded-0"><i class="icon-check"></i> Activate</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- shop_table --}}
                <table id="shop_table"
                    class="d-none table text-center table-striped table-bordered dt-responsive nowrap"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>GST</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    @php
                    $Shops=App\Shop::all()->where('is_verified',false);
                    @endphp
                    <tbody>
                        @foreach ($Shops as $shop)
                        <tr>
                            <td>{{ $shop->shop_name }}</td>
                            <td>{{ $shop->phone }}</td>
                            <td>{{ $shop->shop_GST }}</td>
                            <td>{{ $shop->address }}</td>
                            <td>{{ $shop->city }}</td>
                            <td>{{ $shop->state }}</td>
                            <td>{{ $shop->zip }}</td>
                            <td>{{ $shop->discription }}</td>
                            <td><a href="#" class="btn btn-success btn-sm rounded-0"><i class="icon-check"></i>
                                    Activate</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
