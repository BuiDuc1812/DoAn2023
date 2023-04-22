@extends('layout')
@section('title', 'Quản lí tài khoản')
@section('layout')
@if ( Session::has('success') )
	<div class="alert success alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()"  aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<section class="col-lg-12 connectedSortable">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="">
                <div class="card mb-4">
                    <div class="card-header p-3 pb-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="w-50">
                                <h6>Chi tiết đơn hàng</h6>
                                <p class="text-sm mb-0">
                                    Mã đơn hàng <b>#120{{ $orders->id }}</b> Từ
                                    <b>{{ $orders->created_at->diffForHumans() }}</b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pt-0">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tên sản phẩm</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Số lượng</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Giá</th>
                                                <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tổng cộng</th>
                                                <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $totalOrder = 0 ?>
                                        @foreach ($detail as $item)
                                        <?php $totalOrder += $item->subtotal ?>
                                            <tr>
                                                <td>
                                                    <div style="display:flex; align-items:center">
                                                        <div>
                                                            <img src="{{ url('uploads') }}/{{ $item->product->image }}"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">{{ $item->product->name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-normal mb-0">{{ $item->quantity }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dot me-4">
                                                        <i class="bg-info"></i>
                                                        <span
                                                            class="text-dark text-xs">{{ number_format($item->product->price) }}đ</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dot me-4">
                                                        <i class="bg-info"></i>
                                                        <span
                                                            class="text-dark text-xs">{{ number_format($item->subtotal) }}đ</span>
                                                    </span>
                                                </td>
                                                <td>
                                                  
                                                    <a href="{{ route('customer.orderdelete',['productId' => $item->product->id, 'orderId' => $orders->id])}}">Xoá sản phẩm</a>
                                            
                                                </td>  
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr class="horizontal dark mt-4 mb-4">
                        <div style="justify-content:space-between; margin:0" class="row">
             
                            <div class="col-lg-5 col-md-6 col-12">
                       
                                <h6 class="mb-3 mt-4">THÔNG TIN NGƯỜI NHẬN</h6>
                                <ul style="list-style:none" class="list-group">
                                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                        <div style="display:flex; flex-direction:column" class="d-flex flex-column">
                                            <span class="mb-2 text-xs">Tên khách hàng <span
                                                    class="text-dark font-weight-bold ms-2">{{ $orders->user->name }}</span></span>
                                            <span class="mb-2 text-xs">Địa chỉ nhận hàng: <span
                                                    class="text-dark ms-2 font-weight-bold">{{ $orders->address }}</span></span>
                                            <span class="text-xs">Số điện thoại: <span
                                                    class="text-dark ms-2 font-weight-bold">{{ $orders->phone }}</span></span>
                                            <span class="text-xs">Ghi chú: <span
                                                    class="text-dark ms-2 font-weight-bold">{{ $orders->note }}</span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-12 ms-auto">
                                <h6 class="mb-3">Tổng cộng</h6>
                                <div class="d-flex justify-content-between mt-4">
                                    <span class="mb-2 text-lg">
                                        Giao hàng miễn phí
                                    </span>

                                </div>
                              
                                <div class="d-flex justify-content-between mt-4">
                                    <span class="mb-2 text-lg">
                                        Tổng :
                                    </span>
                                    <strong><span
                                        class="woocommerce-Price-amount amount">{{number_format($totalOrder)}}&nbsp;<span
                                            class="woocommerce-Price-currencySymbol">₫</span></span></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
