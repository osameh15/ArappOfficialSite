@extends("Dashboard::layouts.master")
@section("content")
    <div class="main-content padding-0 categories">
        <div class="row no-gutters">
            @section("breadcrumb")
                <li><a href="{{route("categories")}}" title="دسته بندی">دسته بندی</a></li>
            @endsection
            @include("Permission::parts.show")
            @include("Permission::parts.create")

        </div>
    </div>
@endsection
