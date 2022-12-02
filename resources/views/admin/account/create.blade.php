@extends('home')
@section('content')
@php
use App\Http\Constants\Status;
use App\Http\Constants\TypeAccount;
@endphp
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Tạo tài khoản</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div class="container">
            <h2>Thêm Nhân viên</h2>
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
        
        
            <form method="POST" action="{{route('account.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" name="email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tên</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('name')}}"  name="name" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}"  name="password" >
                  </div>
                <div class="form-group">
                    <label for="status">Vai trò</label>
                    <select id="status" class="custom-select" name="role">
                        <option value="{{TypeAccount::$CUSTOMER}}">Độc giả</option>
                        <option value="{{TypeAccount::$AUTHOR}}">Tác giả</option>
                      </select>
                      
                  </div>
                  <div class="form-group">
                    <label for="title">Hình ảnh</label>
                    <input type="file"class="form-control" name="image">
                    
                  </div>
        
                <button type="submit" name="addStaff" class="btn btn-primary">Thêm</button>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection