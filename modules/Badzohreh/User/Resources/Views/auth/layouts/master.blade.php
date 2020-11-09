@include("User::auth.layouts.header")

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt mt-5 ml-5" data-tilt>
                <img src="/site/images/navlogo.png" alt="IMG">
            </div>
            @yield("content")
        </div>
    </div>
</div>
@include("User::auth.layouts.footer")






