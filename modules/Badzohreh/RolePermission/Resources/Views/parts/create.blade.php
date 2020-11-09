{{--todo create component for inputs--}}
<div class="col-4 bg-white">
    <p class="box__title"></p>
    <form action="{{route('role.create')}}" method="post" class="padding-30">
        @csrf
        <x-dashboard-input type="text" name="name" value='{{old("name")}}' placeholder="نام نقش کاربری" required/>
        <p class="box__title margin-bottom-15">مجوز ها</p>
        @foreach($permissions as $permission)
            <label class="ui-checkbox pt-1 pr-3">
                <input type="checkbox" name="permissions[{{ $permission->name }}]" class="sub-checkbox"
                       data-id="{{$permission->id}}"
                       value="{{ $permission->name }}"
                       @if(is_array(old('permissions')) && array_key_exists($permission->name, old('permissions'))) checked @endif
                >
                <span class="checkmark"></span>
                @lang($permission->name)
            </label>
        @endforeach
        <x-validation-error field="permissions"/>
        <button class="btn btn-webamooz_net mt-1">اضافه کردن</button>
    </form>
</div>