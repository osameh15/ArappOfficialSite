@extends("Dashboard::layouts.master")

@section("content")
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                <p class="box__title">ویرایش نقش کاربری</p>
                <form action="{{route('role.update',$role->id)}}" method="post" class="padding-30">
                    @csrf
                    @method("PATCH")
                    <x-dashboard-input type="text" name="name" value="{{$role->name}}" placeholder="نام نقش کاربری"
                                       class="text"/>
                    <p class="box__title margin-bottom-15">مجوز ها</p>
                    @foreach($permissions as $permission)
                        <label class="ui-checkbox pt-1 pr-3">
                            <input type="checkbox" name="permissions[{{ $permission->name }}]" class="sub-checkbox"
                                   data-id="{{$permission->id}}"
                                   value="{{ $permission->name }}"
                                   @if($role->hasPermissionTo($permission->name)) checked @endif
                            >
                            <span class="checkmark"></span>
                            @lang($permission->name)
                        </label>
                    @endforeach
                    <x-validation-error field="permissions"/>
                    <button class="btn btn-webamooz_net mt-2">ویرایش نقش کاربری</button>
                </form>
            </div>

        </div>
    </div>
@endsection
