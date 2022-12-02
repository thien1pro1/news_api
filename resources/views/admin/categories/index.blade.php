@extends("admin.layouts.main")


@section("content")

<div class="col-md-12">
    @if(Session::has('msg'))
    <div class="alert alert-success"> {{ Session::get('msg') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh mục</h4>
            <a href="{{route('category.create')}}">
                <button class="btn btn-outline-primary">Thêm mới</button>
            </a>
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
                        Mô tả
                    </th>
                    <th>
                        Trạng thái
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
                            {{$category->description}}
                        </td>
                        <td>
                            {{$category->getStatus()}}
                        </td>
                        <td class="text-right d-flex" style="align-items: flex-start; justify-content: flex-end;">
                            <a href="{{route('category.edit', ['category' => $category->id])}}"
                               class="text-white">
                                <button class="btn btn-primary mr-2">Sửa</button>
                            </a>
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
