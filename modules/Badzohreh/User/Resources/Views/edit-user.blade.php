@extends("Dashboard::layouts.master")

@section("content")
    <div class="main-content  ">
        <div class="user-info bg-white padding-30 font-size-13">
            <form action="">
                <div class="profile__info border cursor-pointer text-center">
                    <div class="avatar__img"><img src="/panel/img/pro.jpg" class="avatar___img">
                        <input type="file" accept="image/*" class="hidden avatar-img__input">
                        <div class="v-dialog__container" style="display: block;"></div>
                        <div class="box__camera default__avatar"></div>
                    </div>
                    <span class="profile__name">کاربر : {{$user->name}}</span>
                </div>
                <input class="text" placeholder="نام کاربری" value="{{$user->name}}">
                <input class="text text-left" placeholder="ایمیل" value="Mohammadniko@gmail.com">
                <input class="text text-left" placeholder="شماره " value="09376108107">
                <input class="text text-left" placeholder="نام کاربری و آدرس پروفایل">
                <p class="input-help text-left margin-bottom-12" dir="ltr">
                    https://webamooz.net/tutors/
                    <a href="https//webamooz/tutors/Mohammadnikoo">MohammadNikoo</a>
                </p>
                <input class="text text-left" placeholder="رمز عبور">
                <p class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای
                    غیر الفبا مانند <strong>!@#$%^&*()</strong> باشد.</p>
                <br>
                <textarea class="text" placeholder="درباره من مخصوص مدرسین"></textarea>
                <br>
                <br>
                <button class="btn btn-webamooz_net">ذخیره تغییرات</button>
            </form>
        </div>
    </div>
@endsection