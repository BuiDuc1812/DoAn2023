@extends('main')
@section('title', 'Chi tiết đơn hàng')
@section('noidung')

    <section class="col-lg-12 connectedSortable">
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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Chi tiết đơn hàng</li>
                    </ol>
                </nav>
            </div>
        </nav>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8 mx-auto">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $totalOrder = 0 ?>
                                            @foreach ($detail as $item)
                                            <?php $totalOrder += $item->subtotal ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2">
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
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr class="horizontal dark mt-4 mb-4">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <h6 class="mb-3">Trạng thái</h6>
                                    <div class="timeline timeline-one-side">
                                        @if ($orders->status == 0)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @elseif($orders->status == 1)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã #120{{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @elseif($orders->status == 2)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">shopping_cart</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã được giao
                                                        cho đơn vị vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @elseif($orders->status == 3)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">shopping_cart</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã đc giao
                                                        cho đơn vị vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">local_shipping</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đang vận chuyển </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">shopping_cart</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã đc giao
                                                        cho đơn vị vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">local_shipping</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đang vận chuyển </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-success text-gradient text-lg">done</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng dã được
                                                        vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-12">
                                    <h6 class="mb-3">Phương thức thanh toán</h6>
                                    <div
                                        class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                        <h6 class="mb-0">Thanh toán khi nhận hàng</h6>
                                    </div>
                                    <h6 class="mb-3 mt-4">THÔNG TIN NGƯỜI NHẬN</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
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
