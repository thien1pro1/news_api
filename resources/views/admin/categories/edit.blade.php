@extends("admin.layouts.main")


@section("content")
<div class="container">
    <h2>Sửa danh mục</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('msg'))
    <div class="alert alert-success"> {{ Session::get('msg') }}</div>
    @endif

    <form method="POST" action="{{route('category.update', ['category'=>$category->id])}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$category->name}}">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mô tả</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description"
                   value="{{$category->description}}">
        </div>
        <div class="form-group">
            <label for="status">Trạng thái</label>
            <select id="status" class="custom-select" name="status">
                <option value="1" {{$category->status == 1 ? 'selected' : ''}}>kích hoạt</option>
                <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Không kích hoạt</option>

            </select>

        </div>

        <button style="float: left;   min-width: 100px;    margin:5px;" type="submit" name="addCategogy"
                class="btn btn-primary">Sửa
        </button>
    </form>

</div>

@endsection
