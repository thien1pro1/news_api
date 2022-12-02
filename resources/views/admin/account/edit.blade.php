@extends('home')
@section('content')
@php
use App\Http\Constants\Status;
use App\Http\Constants\TypeAccount;
@endphp
<div class="col-md-12">
  <div class="card">

    <div class="card-body">
      <div class="table-responsive">
        <div class="container">
            <h2>Cập nhâp thông tin tài khoản</h2>
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
        
        
            <form method="POST" action="{{route('account.update',[$account->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{$account->email}}" name="email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tên</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$account->name}}"  name="name" >
                </div>

                <div class="form-group">
                    <label for="status">Vai trò</label>
                    <select id="status" class="custom-select" name="role">
                        @if($account->role==TypeAccount::$CUSTOMER)
                        <option selected value="{{TypeAccount::$CUSTOMER}}">Độc giả</option>
                        <option value="{{TypeAccount::$AUTHOR}}">Tác giả</option>
                        @else
                        <option value="{{TypeAccount::$CUSTOMER}}">Độc giả</option>
                        <option selected value="{{TypeAccount::$AUTHOR}}">Tác giả</option>
                        @endif
                      </select>
                      
                  </div>
                  <div class="form-group">
                    <label for="title">Hình ảnh</label>
                    <input type="file"class="form-control" name="image">
                    
                  </div>
        
                <button type="submit" name="addStaff" class="btn btn-primary">Cập nhật</button>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection