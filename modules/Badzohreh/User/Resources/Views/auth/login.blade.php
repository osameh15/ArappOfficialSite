@extends("User::auth.layouts.master")
@section("content")
    <form class="login100-form validate-form" method="POST" action="{{ route("login") }}">
        @csrf
        <span class="login100-form-title">
            ورود
        </span>
        <x-login-input type="email" name="email" value="{{ old('email') }}" placeholder="ایمیل" required/>
        <x-login-input type="password" name="password" placeholder="پسورد" required/>
        <a class="txt2 text-right pr-2" style="display: block;" href="{{route("password.request")}}">
            فراموشی رمز عبور
        </a>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="loginSubmit" type="submit">
                ورود
            </button>
        </div>
        <br><br>
        <div class="text-center m2-5 service">
            <a class="txt2" href="{{route("register")}}">
                عضویت
            </a>
            <a class="txt2" href="/">
                صفحه اصلی
            </a>
        </div>
    </form>
@endsection

{{--todo add remember me--}}

{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}

