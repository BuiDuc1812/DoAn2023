@extends('main')
@section('title','Chỉnh sửa sản phẩm')
@section('noidung')
<?php //Hiển thị thông báo thành công?>
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

<?php //Hiển thị form sửa sản phẩm?>
@include('alert')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">CHỈNH SỬA SẢN PHẨM</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">
                </p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('product.update',$product)}}" enctype= "multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="input-group input-group-static mb-4">
                                <label>Tên sản phẩm</label>
                                <input type="name" value="{{$product->name}}" name="name" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Giá sản phẩm *</label>
                                <input type="text" class="form-control" value="{{$product->price}}" name="price">
                                <span class="input-group-text">VND</span>
                            </div>
                            
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Ảnh *</label>
                                <input type="file" name="file" class="form-control">
                                <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="100px">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Danh mục *</label>
                                <select class="form-control" name="category_id" id="">
                                    @foreach($cate as $value)
                                        <option value="{{$value->id}}" {{$value->id == $product->category_id ? 'selected' : ''}}>
                                            {{$value->name}}</option>
                                    @endforeach
                                  </select>

                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Mô tả sản phẩm *</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="15" value="{{$product->description }}">{{$product->description }}</textarea>
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