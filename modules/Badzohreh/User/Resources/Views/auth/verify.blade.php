@extends("User::auth.layouts.master")
@section("content")
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-12 direction">
                    <span class="login100-form-title">
                             فعال سازی حساب کاربری
                        <p class="mt-2 direction">یک لینک به ایمیل شما ارسال شده است برای ادامه عمیلیات به ایمیل خود مراجعه کرده و روی لینک کلیک کنید.</p>
                   </span>
            </div>
        </div>
    </div>
    <form  method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                ارسال مجدد کد فعال سازی
            </button>
        </div>
    </form>

    <div class="text-center m2-5 service">
        <a class="txt2" href="/">
            صفحه اصلی
        </a>
    </div>
@endsection