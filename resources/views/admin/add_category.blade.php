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
                <a class="list-group-item with-badge " href="{{ route('admin.dashboard') }}"><i
                        class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item" href="{{ route('admin.profile') }}"><i class="icon-head"></i>My
                    Profile</a>
                <a class="list-group-item active" href="#"><i class="icon-plus"></i>Add Category</a>
                <a class="list-group-item with-badge" href="{{ route('admin.maintenance_and_approval')}}"><i
                        class="icon-clipboard"></i>Maintenance
                    & Approval</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <h3>Add New Category</h3>
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <form class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="account-fn">Category name</label>
                        <input class="form-control" type="text" id="account-fn" name="category_name" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="account-fn">Tags</label>
                        <textarea name="tags" class="form-control" id="tag" cols="30" rows="10"></textarea>
                        {{-- <input class="form-control" type="text" id="account-fn" name="tags" required> --}}
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">

                        </div>
                        <button class="btn btn-primary margin-right-none" type="button" data-toast
                            data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check"
                            data-toast-title="Success!" data-toast-message="Your profile updated successfuly."> <i
                                class="icon-plus"></i> Add
                            Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
