@extends('admin')
@section('content')
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps ps--active-y bg-white"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0"
                href="/admin"
                target="_blank">
                <img src="{{ url('template/admin') }}/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2 PRO</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mb-2 mt-0">
                    <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#profileExample" aria-controls="ProfileNav" role="button">
                        <span class="nav-link-text ms-2 ps-1">{{ session('user')->name }}</span>
                    </a>
                    <div class="collapse " id="profileExample">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white " href="{{route('login')}}">
                                    <span class="sidenav-normal  ms-2  ps-1">logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr class="horizontal light mt-0">
                <li class="nav-item">

                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                href="#profileExample">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Quản lý danh mục <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="profileExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('category.create') }}">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Thêm mới danh mục </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('category.index') }}">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Danh sách danh mục </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                href="#usersExample">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Người dùng và <br> người quàn trị <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="usersExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('user.create') }}">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Thêm mới người dùng và <br>  người quản trị </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('user.index') }}">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Danh sách người dùng và <br>  người quản trị </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                href="#accountExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Quản lý sản phẩm <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="accountExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('product.create') }}">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Thêm mới sản phẩm </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('product.index') }}">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Danh sách sản phẩm </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                href="#projectsExample">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Quản lý đơn hàng <b class="caret"></b></span>
                            </a>
                            <div class="collapse " id="projectsExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="{{ route('order.index') }}">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal  ms-2  ps-1"> Danh sách đơn hàng </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>

                </li>

            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 905px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 885px;"></div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @yield('noidung')
    </main>
        
    
  
@endsection
