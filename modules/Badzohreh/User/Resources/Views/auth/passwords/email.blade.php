@extends("User::auth.layouts.master")
@section("content")

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            یک لینک به ایمیل شما ارسال شد.
        </div>
    @endif

    <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-12 direction">
                    <span class="login100-form-title">
                             فراموشی رمز عبور
                        <p class="mt-2 direction">لطفا ایمیلی که با آن ثبت نام کرده اید را وارد کنید.</p>
                   </span>
                </div>
            </div>
        </div>
        <x-login-input type="email" name="email" placeholder="ایمیل" autocomplete="email" value="{{old("email")}}"
                       required/>

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

