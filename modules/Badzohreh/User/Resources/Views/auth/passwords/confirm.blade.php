@extends("User::auth.layouts.master")
@section("content")

    <form class="login100-form validate-form" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-12 direction">
                    <span class="login100-form-title">
                            تایید پسورد
                        <p class="mt-2 direction">لطفا برای ادامه کار پسورد خود را تایید کنید.</p>
                   </span>
                </div>
            </div>
        </div>

        <x-login-input type="password" name="password" placeholder="پسورد" autocomplete="current-password" required/>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                تایید پسورد
            </button>
        </div>
        <br><br>
        <div class="text-center m2-5 service">
            @if (Route::has('password.request'))
                <a class="txt2" href="{{ route('password.request') }}">
                    فراموشی رمز عبور
                </a>

            @endif
            <a class="txt2" href="/">
                صفحه اصلی
            </a>
        </div>
    </form>
@endsection
