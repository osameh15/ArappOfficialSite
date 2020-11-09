@include("Dashboard::layouts.header")
@include("Dashboard::layouts.sidebar")
<div class="content">
   @include("Dashboard::layouts.top-navbar")
    @include("Dashboard::layouts.breadcrumb")
    @yield("content")
</div>

@include("Dashboard::layouts.footer")