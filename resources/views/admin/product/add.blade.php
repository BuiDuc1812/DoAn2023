@extends('main')
@section('title','Thêm mới sản phẩm')
@section('noidung')
    <?php //Hiển thị thông báo thành công
    ?>
    @if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only" onclick="removeMess()" >Close</span>
		</button>
	</div>
    @endif

    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" id="mess" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only" onclick="removeMess()">Close</span>
            </button>
        </div>
    @endif

    <?php //Form thêm mớisản phẩm
    ?>
    @include('alert')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row min-vh-80">
                <div class="col-lg-8 col-md-10 col-12 m-auto">
                    <h3 class="mt-3 mb-0 text-center">THÊM MỚI SẢN PHẨM</h3>
                    <p class="lead font-weight-normal opacity-8 mb-7 text-center">
                    </p>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="input-group input-group-static mb-4">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control"name="name">
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label for="" class="">Giá sản phẩm *</label>
                                    <input type="text" class="form-control" name="price">
                                    <span class="input-group-text">VND</span>
                                </div>
                                
                                <div class="input-group input-group-static mb-4">
                                    <label for="" class="">Ảnh *</label>
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label for="" class="">Danh mục *</label>
                                    <select class="form-control" name="category_id" id="">
                                        @foreach ($cate as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <!-- /input-group -->

                                <div class="input-group input-group-static mb-4">
                                    <label for="" class="">Mô tả sản phẩm *</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="15"></textarea>
                                </div>
                                <span class="input-group-append mt-3">
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
