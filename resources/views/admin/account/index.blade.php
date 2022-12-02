@extends('home')
@section('content')

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"> Simple Table</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              STT
            </th>
            <th>
              Tên
            </th>
            <th>
              email
            </th>
            <th class="text-right">
              Loại tài khoản
            </th>
            <th>
              Trạng thái
            </th>
            <th>
              Quản lý
            </th>
          </thead>
          <tbody>
            @php
use App\Http\Constants\Status;
use App\Http\Constants\TypeAccount;
@endphp
            @foreach($accounts as $key => $account)
              <tr>
                <td>
                  {{$key}}
                </td>
                <td>
                  {{$account->name}}
                </td>
                <td>
                  {{$account->email}}
                </td>
                <td>
                  <select>
                    
                      @if($account->role == TypeAccount::$ADMIN)
                        <option selected value="{{TypeAccount::$ADMIN}}">Admin</option>
                        <option value="{{TypeAccount::$CUSTOMER}}">Người dùng</option>
                        <option value="{{TypeAccount::$AUTHOR}}">Tác giả</option>
                      @elseif ($account->role == TypeAccount::$CUSTOMER)
                        <option value="{{TypeAccount::$ADMIN}}">Admin</option>
                        <option selected value="{{TypeAccount::$CUSTOMER}}">Người dùng</option>
                        <option value="{{TypeAccount::$AUTHOR}}">Tác giả</option>

                      @else
                        <option value="{{TypeAccount::$ADMIN}}">Admin</option>
                        <option value="{{TypeAccount::$CUSTOMER}}">Người dùng</option>
                        <option selected  value="{{TypeAccount::$AUTHOR}}">Tác giả</option>

                      @endif
                    
                  </select>
                </td>
                <td>
                  
                    @if($account->status == Status::$DEACTIVATE)
                    <button type="button" class="btb btn-danger">Đã vô hiệu</button>
                    @elseif($account->status == Status::$ACTIVE)
                    <button type="button" class="btb btn-success">Đã kích hoạt</button>
                    @endif
                  
                </td>
                <td>
                  <a href="{{route('account.edit',[$account->id])}}" class="btn btn-primary">Sửa</a>
                  <form action="{{route('account.destroy',[$account->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn muốn xóa người dùng {{$account->name}}?')" class="btn btn-danger">Xóa</button>
                    
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