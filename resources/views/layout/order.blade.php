@extends('layout')
@section('title', 'Quản lí tài khoản')
@section('layout')
    <main id="main" class="">

        <div style="min-height:40vh" class="row">
            <div class="">
                <div class="card">
                    <div class="table-responsive">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                               
                            <div style="display:flex; justify-content:center" class="dataTable-container">
                                @if ($ordercount==0)
                                   
                                    <div style="display: flex;flex-direction: column; margin-top:30px" class="continue-shopping pull-left text-left">
                                        <span style="margin-bottom:24px;font-size:24px; line-height:30px; font-weight:400">Bạn chưa có đơn đặt hàng nào cả !!!!</span>
                                        <a class="button-continue-shopping button primary"
                                            href="{{ route('home') }}">
                                            &#8592; Tiếp tục xem sản phẩm </a>
                                    </div>
                                @else
                                      <table class="table table-flush dataTable-table" id="datatable-search">
                                    <thead class="thead-light">
                                        <tr>
                                            <th data-sortable="" style=""><a href="#"
                                                    class="dataTable-sorter">Đơn hàng</a></th>
                                            <th data-sortable="" ><a href="#"
                                                    class="dataTable-sorter">Ngày đặt</a></th>
                                            <th data-sortable="" style="width: 15.4618%;"><a href="#"
                                                    class="dataTable-sorter">Trạng thái</a></th>
                                            <th data-sortable=""><a href="#"
                                                    class="dataTable-sorter">Người đặt</a></th>
                                            <th data-sortable="" style="width: 21.1847%;"><a href="#"
                                                    class="dataTable-sorter">Địa chỉ giao hàng</a></th>
                                            <th data-sortable="" style="width: 11.0442%;"><a href="#"
                                                    class="dataTable-sorter">Ghi chú</a></th>
                                                    <th></th>
                                                    <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($order as $key => $item)
                                        <tr>
                                            <td>
                                          
                            
                                                    <p class="text-xs font-weight-normal ms-2 mb-0">{{$key +1}}</p>
                                              
                                            </td>
                                            <td class="font-weight-normal">
                                                <span class="my-2 text-xs">{{$item->created_at}}</span>
                                            </td>
                                            <td class="text-xs font-weight-normal">
                                                @if ($item->status == 0)
                                                <span>Đơn hàng đã nhận</span>
                                            @elseif($item->status == 1)
                                            <span>Đang chuẩn bị</span>
                                            @elseif($item->status == 2)
                                            <span>Đã giao cho đơn vị vận chuyển</span>
                                            @elseif($item->status == 3)
                                            <span>Đang vận chuyển</span>
                                            @else 
                                            <span>Đã giao hàng</span>
                                            @endif
                                            </td>
                                            <td class="text-xs font-weight-normal">
                                                <div class="d-flex align-items-center">
                                                    <span>{{$item->user->name}}</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-normal">
                                                <span class="my-2 text-xs">{{$item->address}}</span>
                                            </td>
                                            <td class="text-xs font-weight-normal">
                                                <span class="my-2 text-xs">{{$item->note}}</span>
                                            </td>
                                            <td>
                                                <a href="{{route('customer.orderdetails',$item->id)}}" class="btn">Chi tiết đơn hàng</a>
                                            </td> 
                                            <td>
                                                @if ($item->status == 0 || $item->status == 1 )
                                                
                                                    <form style="margin: 0"  action="{{ route('order.destroy', $item) }}" method="POST"
                                                    onsubmit="return confirm('Bạn thực sự muốn xóa đơn hàng này?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="background-color: #ccc; margin:0" type="submit" class="">Xóa</button>
                                                </form>
                                                @endif
                                                
                                            </td>                              
        
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>  
                                  
                                @endif
                                
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main><!-- #main -->
@endsection
