@extends("Dashboard::layouts.master")
{{--todo use component--}}

@section("content")
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                <p class="box__title">ایجاد دسته بندی جدید</p>
                <form action="{{route('category.update',$category->id)}}" method="post" class="padding-30">
                    @csrf
                    @method("PATCH")
                    <input type="text" name="name" value="{{$category->name}}" placeholder="نام دسته بندی" class="text">
                    @error("name")
                    <div class="alert alert-danger text-right direction" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <input type="text" name="slug" value="{{$category->slug}}" placeholder="نام انگلیسی دسته بندی"
                           class="text">
                    @error("slug")
                    <div class="alert alert-danger text-right direction" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                    <select name="parent_id" id="">
                        <option value="">ندارد</option>
                        @foreach($categories as $cat)
                            <option value="{{$cat->id}}" @if($cat->id == $category->parent_id) selected @endif>
                                {{$cat->name}}
                            </option>
                        @endforeach
                    </select>

                    @error("parent_id")
                    <div class="alert alert-danger text-right direction" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <button class="btn btn-webamooz_net">ویرایش دسته بندی</button>
                </form>
            </div>

        </div>
    </div>
@endsection