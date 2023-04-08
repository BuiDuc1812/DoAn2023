@extends('main')
@section('noidung')
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only" >Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only" >Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị form sửa sản phẩm?>
@include('alert')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">CHỈNH SỬA TÀI KHOẢN</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">
                </p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('user.update',$user)}}">
                            @csrf
                            @method('PUT')
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Tên tài khoản</label>
                            <input type="hidden" value="{{$user->id}}" name="id">
                                <input type="name" value="{{$user->name}}" name="name" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Tài khoản</label>
                                <input type="text" class="form-control" value="{{$user->email}}" name="email">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Quyền</label>
                                <select class="form-control" name="status" id="">
                                        <option value="0" {{$user->status == 0 ? 'selected' : ''}}>
                                            Người quản trị
                                        </option>
                                        <option value="1" {{$user->status == 1 ? 'selected' : ''}}>
                                            Người dùng
                                        </option>
                                  </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Mật khẩu cũ*</label>
                                <input type="text" class="form-control" placeholder="Mật khẩu cũ..." name="old_password">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Mật khẩu mới*</label>
                                <input type="text" class="form-control" placeholder="Mật khẩu mới..." name="password">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Xác nhận mật khẩu*</label>
                                <input type="text" class="form-control" placeholder="Xác nhận mật khẩu..." name="confim_password">
                            </div>
                            <span class="input-group-append mt-3">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>>
@endsection