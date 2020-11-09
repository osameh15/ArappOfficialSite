@section("css")
    <link rel="stylesheet" href="/panel/css/jquery.toast.min.css" type="text/css">
@endsection
<div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
    <p class="box__title">دسته بندی ها</p>
    <div class="table__box">
        <table class="table">
            <thead role="rowgroup">
            <tr role="row" class="title-row">
                <th>شناسه</th>
                <th>نام نقش کاربری</th>
                <th>مجوز ها</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr role="row" class="">
                    <td><a href="">{{$role->id}}</a></td>
                    <td>{{$role->name}}</td>
                    <td>
                        @foreach($role->permissions as $permission)
                            <ul>
                                <li>@lang($permission->name)</li>
                            </ul>
                            @endforeach
                    </td>
                    <td>
                        <a href=""
                           onclick="handleDeleteItem(event,'{{route("role.delete",$role->id)}}','delete')"
                           class="item-delete mlg-15" title="حذف"></a>
                        <a href="{{route("role.edit",$role->id)}}" class="item-edit" title="ویرایش"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@section("js")
    <script src="/panel/js/jquery.toast.min.js"></script>
@endsection
