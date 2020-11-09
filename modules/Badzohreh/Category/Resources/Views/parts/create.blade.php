{{--todo create component for inputs--}}
<div class="col-4 bg-white">
    <p class="box__title">ایجاد دسته بندی جدید</p>
    <form action="{{route('category.create')}}" method="post" class="padding-30">
        @csrf
        <x-dashboard-input type="text" name="name" placeholder="نام دسته بندی" required/>

        <x-dashboard-input type="text" name="slug" placeholder="نام انگلیسی دسته بندی"/>
        <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
        <x-select-box name="parent_id">
            <option value="">ندارد</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </x-select-box>
        <button class="btn btn-webamooz_net">اضافه کردن</button>
    </form>
</div>