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
<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
id="navbarBlur" data-scroll="true">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-3 text-dark" href="javascript:;">
                    <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>shop </title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="#252f40"
                                fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                        <path
                                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                        </path>
                                        <path
                                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{route('admin.home')}}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Danh sách đơn hàng</li>
        </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
                <form action="">
                    <div class="input-group grp-search">
                        <input type="search" class="form-control form-control-lg" placeholder="Nhập từ khóa tìm kiếm" name="key">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default icon-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</nav>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                               
                            <div class="dataTable-container">
                                <table class="table table-flush dataTable-table" id="datatable-search">
                                    <thead class="thead-light">
                                        <tr>
                                            <th data-sortable="" style="width: 17.0683%;"><a href="#"
                                                    class="dataTable-sorter">STT</a></th>
                                            <th data-sortable="" style="width: 15.9639%;"><a href="#"
                                                    class="dataTable-sorter">Tên người dùng</a></th>
                                            <th data-sortable="" style="width: 15.4618%;"><a href="#"
                                                    class="dataTable-sorter">Đánh giá</a></th>
                                            <th data-sortable="" style="width: 19.2771%;"><a href="#"
                                                    class="dataTable-sorter">Ghi chú</a></th>
                                            <th data-sortable="" style="width: 21.1847%;"><a href="#"
                                                    class="dataTable-sorter">Ngày đánh giá</a></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($review as $key => $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-xs font-weight-normal ms-2 mb-0">{{$key +1}}</p>
                                                </div>
                                            </td>
                                            <?php
                                            $user = App\Models\User::where('id',$item->user_id)->first();
                                            $name = $user->name;
                                            ?>
                                            <td class="text-xs font-weight-normal">
                                                <div class="d-flex align-items-center">
                                                    <span>{{$name}}</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-normal">
                                                @if ($item->rating == 1)
                                                <span>Rất tệ</span>
                                            @elseif($item->rating == 2)
                                            <span>Không tệ</span>
                                            @elseif($item->rating == 3)
                                            <span>Trung bình</span>
                                            @elseif($item->rating == 4)
                                            <span>Tốt</span>
                                            @else 
                                            <span>Rất tốt</span>
                                            @endif
                                            </td>
                                            <td class="font-weight-normal">
                                                <span class="my-2 text-xs">{{$item->desciption}}</span>
                                            </td>
                                            <td class="font-weight-normal">
                                                <span class="my-2 text-xs">{{$item->created_at->diffForHumans()}}</span>
                                            </td>
                                            <td>
                                                <form action="{{ route('deletereview', $item) }}" method="POST"
                                                    onsubmit="return confirm('Bạn thực sự muốn xóa đơn hàng này?')">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
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
            </div>
        </div>
    </div>
@endsection