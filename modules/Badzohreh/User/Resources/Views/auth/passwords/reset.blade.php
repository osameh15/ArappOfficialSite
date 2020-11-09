@extends("User::auth.layouts.master")
@section("content")
    <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-12 direction">
                    <span class="login100-form-title">
                             تغییر رمز عبور
                   </span>
                </div>
            </div>
        </div>

        <x-login-input type="email" name="email" placeholder="ایمیل" autocomplete="email"
                       value="{{ $email ?? old('email') }}"
                       required/>
        <x-login-input type="password" name="password" placeholder="پسورد" autocomplete="email"
                       autocomplete="new-password" required/>

        <x-login-input type="password" name="password_confirmation" placeholder=" تکرار پسورد"
                       autocomplete="new-password"
                       autocomplete="new-password" required/>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                تایید
            </button>
        </div>
        <br><br>
        <div class="text-center m2-5 service">
            <a class="txt2" href="/">
                صفحه اصلی
            </a>
        </div>
    </form>
@endsection
