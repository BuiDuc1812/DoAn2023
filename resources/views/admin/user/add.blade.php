@extends('main')
@section('noidung')
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Form thêm mớisản phẩm?>
@include('alert')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">THÊM MỚI NGƯỜI DÙNG</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">
                </p>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Tên tài khoản *</label>
                                <input type="name" placeholder="Tên tài khoản..." name="name" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Tài khoản*</label>
                                <input type="text" class="form-control" placeholder="Tài khoản..." name="email">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Mật khẩu*</label>
                                <input type="text" class="form-control" placeholder="Mật khẩu..." name="password">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Quyền của tài khoản *</label>
                                <select class="form-control" name="status" id="">
                                    <option value="0" selected>
                                        Người quản trị
                                    </option>
                                    <option value="1">
                                        Người dùng
                                    </option>
                                </select>
                            </div>
                            <span class="input-group-append mt-3">
                                <button type="submit" class="btn btn-primary">Thêm Mới</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection