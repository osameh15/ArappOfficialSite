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
                <th>نام دسته بندی</th>
                <th>نام انگلیسی دسته بندی</th>
                <th>دسته پدر</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $cateogry)
                <tr role="row" class="">
                    <td><a href="">{{$cateogry->id}}</a></td>
                    <td><a href="">{{$cateogry->name}}</a></td>
                    <td>{{$cateogry->slug}}</td>
                    <td>{{$cateogry->parentName}}</td>
                    <td>
                        <a href=""
                           onclick="handleDeleteItem(event,'{{route("category.delete",$cateogry->id)}}','delete')"
                           class="item-delete mlg-15" title="حذف"></a>
                        <a href="{{route("cateogry.edit",$cateogry->id)}}" class="item-edit" title="ویرایش"></a>
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
