@extends("Dashboard::layouts.master")
@section("css")
    <link rel="stylesheet" href="/panel/css/jquery.toast.min.css" type="text/css">
@endsection
@section("content")
    <div class="main-content">
        <div class="user-info bg-white padding-30 font-size-13">
            <form action="{{route("user.update")}}" enctype="multipart/form-data" method="post">
                @csrf
                @method("PATCH")

                <x-user-avatar />

                <x-dashboard-input type="text" class="text" name="name" placeholder="نام کاربری" value="{{$user->name}}"
                                   required/>
                <x-dashboard-input type="text" class="text text-left" name="email" placeholder="ایمیل"
                                   value="{{$user->email}}" required/>
                <x-dashboard-input type="text" class="text text-left"  name="mobile" value="{{$user->mobile}}"
                                   placeholder="شماره "/>
                <x-select-box name="education">
                    <option value="">تحصیلات</option>
                    @foreach(\Badzohreh\User\Model\User::$EDUCATION_TYPES as $education)
                        <option value="{{$education}}"
                                @if($user->education == $education) selected @endif>@lang($education)</option>
                    @endforeach
                </x-select-box>
                <x-dashboard-input type="text" class="text text-left" name="new_password" placeholder="رمز عبور"/>

                <p class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای
                    غیر الفبا مانند <strong>!@#$%^&*()</strong> باشد.</p>
                <br>

                {{--todo add component textarea--}}
                <x-validation-error field="bio"/>
                <textarea class="text" name="bio" placeholder="بیوگرافی">{{$user->bio}}</textarea>
                <br>
                <br>
                <button class="btn btn-webamooz_net">ذخیره تغییرات</button>
            </form>
        </div>
    </div>
@endsection

@section("js")
    <script src="/panel/js/jquery.toast.min.js"></script>
@endsection
