@extends("User::auth.layouts.master")
@section("content")
    <form class="login100-form validate-form" action="{{route("register")}}" method="POST">
        @csrf
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-12 direction">
                    <span class="login100-form-title">
                             ثبت نام کاربر
                        <p class="mt-2 direction">برای ثبت نام لطفا فیلد های زیر را تکمیل کنید.</p>
                   </span>
                </div>
            </div>
        </div>

        <x-login-input type="text" name="name" value="{{ old('name') }}" placeholder="نام" autocomplete="name" required/>
        <x-login-input type="email" name="email" value="{{ old('email') }}" placeholder="ایمیل" autocomplete="email" required/>
        <x-login-input type="password" name="password" placeholder="پسورد" required/>
        {{--todo fix password confirmation--}}
        <x-login-input type="password" name="password_confirmation" placeholder="تکرار پسورد" autocomplete="new-password" required/>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                تایید
            </button>
        </div>
        <br><br>
        <div class="text-center m2-5 service">
            <a class="txt2" href="{{ route("login") }}">
                ورود
            </a>
            <a class="txt2" href="/">
                صفحه اصلی
            </a>
        </div>
    </form>
@endsection

