@extends('layouts.unishop')
@section('content')
<!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>Login / Register Account</h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li><a href="account-orders.html">Account</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>Login / Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-md-6">
            <form class="login-box" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row margin-bottom-1x">
                    <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="#"><i
                                class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
                    <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn"
                            href="/login/github"><i class="socicon-twitter"></i>&nbsp;Twitter Login</a></div>
                    <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="#"><i
                                class="socicon-googleplus"></i>&nbsp;Google+ login</a></div>
                </div>
                <h4 class="margin-bottom-1x">Or using form below</h4>
                <div class="form-group input-group">
                    <input type="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid
                        @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                        required><span class="input-group-addon"><i class="icon-mail"></i></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror



                </div>
                <div class="form-group input-group">
                    <input class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                        type="password" placeholder="Password" required autocomplete="current-password"><span
                        class="input-group-addon"><i class="icon-lock"></i></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                        <label class="custom-control-label" for="remember_me">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="navi-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif

                </div>
                <div class="text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="padding-top-3x hidden-md-up"></div>
            <h3 class="margin-bottom-1x">No Account? Register</h3>
            <p>Registration takes less than a minute but gives you full control over your orders.</p>
            <form class="row" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="reg-fn">{{ __('Name') }}</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                            id="reg-fn" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-email">{{ __('E-Mail Address') }}</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="reg-email"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="phone">{{ __('Phone Number') }}</label>
                        {{-- <input class="form-control" type="text" id="reg-phone" required> --}}
                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        <div id="phone_error"></div>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>
                <div class="col-12 text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" id="register_button"
                        type="submit">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
