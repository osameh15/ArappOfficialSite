@extends("Dashboard::layouts.master")

@section("content")
    <div class="main-content">
        <div class="user-info bg-white padding-30 font-size-13">
            <form action="{{route("user.update")}}" method="post">
                @csrf
                @method("PATCH")
                <div class="profile__info border cursor-pointer text-center">
                    <div class="avatar__img"><img src="/panel/img/pro.jpg" class="avatar___img">
                        <input type="file" accept="image/*" class="hidden avatar-img__input">
                        <div class="v-dialog__container" style="display: block;"></div>
                        <div class="box__camera default__avatar"></div>
                    </div>
                    <span class="profile__name">کاربر : {{$user->name}}</span>
                </div>
                <x-dashboard-input type="text" class="text" name="name" placeholder="نام کاربری" value="{{$user->name}}"
                                   required/>
                <x-dashboard-input type="text" class="text text-left" name="email" placeholder="ایمیل"
                                   value="{{$user->email}}" required/>
                <x-dashboard-input type="text" class="text text-left" name="mobile" placeholder="شماره "
                                   value="mobile"/>
                <x-select-box name="education">
                    <option value="">تحصیلات</option>
                    @foreach(\Badzohreh\User\Model\User::$EDUCATION_TYPES as $education)
                        <option value="{{$education}}">@lang($education)</option>
                    @endforeach
                </x-select-box>
                <x-dashboard-input type="text" class="text text-left" name="new_password" placeholder="رمز عبور"/>

                <p class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای
                    غیر الفبا مانند <strong>!@#$%^&*()</strong> باشد.</p>
                <br>

                {{--todo add component textarea--}}
                <x-validation-error field="bio"/>
                <textarea class="text" name="bio" placeholder="بیوگرافی"></textarea>
                <br>
                <br>
                <button class="btn btn-webamooz_net">ذخیره تغییرات</button>
            </form>
        </div>
    </div>
@endsection