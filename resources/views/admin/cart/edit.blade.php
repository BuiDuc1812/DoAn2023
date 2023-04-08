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

<?php //Hiển thị form sửa sản phẩm?>
@include('alert')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">CHỈNH SỬA TRẠNG THÁI ĐƠN HÀNG</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">
                </p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('order.update',$order)}}" enctype= "multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="input-group input-group-static mb-4">
                                <label>Tên khách hàng</label>
                                <span class="form-control" >{{$order->user->name}}</span>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label>Địa chỉ</label>
                                <input type="text" value="{{$order->address}}" name="" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Số điện thoại</label>
                                <input type="text" class="form-control" value="{{$order->phone}}" name="">
                                
                            </div>
                        
                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Trạng thái</label>
                                
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="0"{{$order->status == 0 ? 'checked': ''}}> Đơn hàng đã nhận
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="1"{{$order->status == 1 ? 'checked': ''}}> Tạo đơn hàng
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="2"{{$order->status == 2 ? 'checked': ''}}> Đã giao cho đơn vị vận chuyển
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="3"{{$order->status == 3 ? 'checked': ''}}> Đang vận chuyển
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="4"{{$order->status == 4 ? 'checked': ''}}> Đã giao hàng
                                    </label>
                                </div>
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="" class="">Ghi chú</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="15" value="{{$order->note }}">{{$order->note }}</textarea>
                            </div>
                            <span class="input-group-append mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>>
@endsection