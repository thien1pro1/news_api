@extends("admin.layouts.main")


@section("content")

<div class="container">
    <h2>Thêm bài đăng cc</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        
    @endif


                        <form autocomplete="off" method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề bài viết</label>
                            <input type="text" placeholder="" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="title">Lượt xem</label>
                            <input type="text" placeholder="" class="form-control" name="views">
                        </div>
                        <div class="form-group">
                            <!-- <label for="title">Lượt xem tháng</label>
                            <input type="text" placeholder="Thêm lượt xem tháng..." class="form-control" name="viewsm"> -->
                        </div>
                        <div class="form-group">
                            <label for="title">Hình ảnh</label>
                            <input type="file"  name="image">

                        </div>
                        <div class="form-group">
                            <label for="title">Mô tả ngắn</label>
                            <textarea name="description" id="ckeditor_shortdesc" placeholder="Mô tả ngắn..." rows="5" class="form-control" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Nội dung </label>
                            <textarea name="content" id="ckeditor_desc" placeholder="Nội dung..." rows="5" class="form-control" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Danh mục bài viết </label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endforeach
                
                            </select>

                        </div>
                        


                            <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm bài viết">
                        </div>
                    </form>


    
</div>
@endsection
