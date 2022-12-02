@extends("admin.layouts.main")


@section("content")
<div class="container">
    <h2>Thêm danh mục</h2>
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

    <form method="POST" action="{{route('category.store')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Tên danh mục</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" name="name">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả</label>
          <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('description')}}"  name="description" >
        </div>
        <div class="form-group">
            <label for="status">Trạng thái</label>
            <select id="status" class="custom-select" name="status">
                <option value="1">kích hoạt</option>
                <option value="0" >Không kích hoạt</option>

              </select>

          </div>

        <button style="float: left;   min-width: 100px;    margin:5px;" type="submit" name="addCategogy" class="btn btn-primary">Thêm</button>
      </form>

</div>

@endsection
