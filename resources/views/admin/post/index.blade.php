@extends("admin.layouts.main")
@section('content')
<div class="container">
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>

    @endif
    <a class="btn btn-success  " href="{{route('post.create')}}">Thêm bài đăng</a>


    <div class="card">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <th>
                    STT
                </th>
                <th>
                   Hình ảnh
                </th>
                <th>
                    Tên bài viết
                </th>
                <th>
                    Mô tả
                </th>
                <th>
                    Danh mục
                </th>
                <th>
                    Trạng thái
                </th>
                <th class="text-right">
                    Hành động
                </th>
                </thead>
                <tbody>
                @if ($posts->count() == 0)
                <tr>
                    <td colspan="4" class="text-center">Trống dữ liệu</td>
                </tr>
                @endif
                @foreach ($posts as $key => $post)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        <img src="{{asset('storage/' . $post->image)}}" alt="" style="height: 150px;width:150px;object-fit: cover;"/>
                    </td>
                    <td>
                        {{$post->name}}
                    </td>
                    <td>
                        {{$post->description}}
                    </td>
                    <td>
                        {{$post->category->name}}
                    </td>
                    <td>
                        {{$post->getStatus()}}
                    </td>
                    <td class="text-right d-flex" style="align-items: flex-start; justify-content: flex-end;">
                        <a href="{{route('post.edit', ['post' => $post->id])}}"
                           class="text-white">
                            <button class="btn btn-primary mr-2">Sửa</button>
                        </a>
                        <form action="{{route('post.destroy', [$post->id])}}" method="post">
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


    @endsection
