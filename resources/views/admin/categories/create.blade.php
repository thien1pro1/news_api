@extends("admin.layouts.main")


@section("content")

<div class="col-md-12">
    @if(Session::has('msg'))
    <div class="alert alert-success"> {{ Session::get('msg') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh mục</h4>
            <button class="btn btn-outline-primary" href="{{route('category.create')}}">Thêm mới</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <th>
                        STT
                    </th>
                    <th>
                        Tên danh mục
                    </th>
                    <th>
                        Ngày tạo
                    </th>
                    <th class="text-right">
                        Hành động
                    </th>
                    </thead>
                    <tbody>
                    @if ($categories->count() == 0)
                    <tr>
                        <td colspan="4" class="text-center">Trống dữ liệu</td>
                    </tr>
                    @endif
                    @foreach ($categories as $key => $category)
                    <tr>
                        <td>
                            {{$key + 1}}
                        </td>
                        <td>
                            {{$category->name}}
                        </td>
                        <td>
                            {{$category->created_at}}
                        </td>
                        <td class="text-right">
                            <button class="btn btn-primary">Sửa</button>
                            <form action="{{route('category.destroy', ['category'=>$category->id])}}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-primary">Xóa</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
