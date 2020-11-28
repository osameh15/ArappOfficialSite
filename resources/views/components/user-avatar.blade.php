<div class="profile__info border cursor-pointer text-center">
    <div class="avatar__img">
        <img src="/panel/img/pro.jpg" class="avatar___img">
        <input type="file"  name="avatar" class="hidden avatar-img__input">
        <div class="v-dialog__container" style="display: block;"></div>
        <div class="box__camera default__avatar"></div>
    </div>
    <span class="profile__name">کاربر : {{auth()->user()->name}}</span>
</div>