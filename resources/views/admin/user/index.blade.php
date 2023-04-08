@extends('main')
@section('noidung')
<?php //Hiển thị thông báo thành công?>

@if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible" id="mess" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" onclick="removeMess()" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only" >Close</span>
        </button>
    </div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" id="mess" role="alert">
        <strong>{{ Session::get('error') }}</strong>
        <button type="button" class="close" onclick="removeMess()" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
@endif

<?php //Hiển thị danh sách sản phẩm?>
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <!-- content -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body">
                        <a href="{{route('user.create')}}" class="btn btn-success" style="margin: 20px">Thêm mới tài khoản</a>
                        <table id="example2" class="table table-bordered table-hover w-full">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày Cập Nhật</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            @if ($value->status == 0)
                                                <span>Người quản trị</span>
                                            @elseif($value->status == 1)
                                                <span>Khách hàng</span>
                                            @endif
                                       </td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td>
                                            @if ($value->status == 0)
                                                <a href="{{ route('user.edit', $value) }}" class="btn btn-primary">Sửa</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($value->status == 0)
                                                <form action="{{ route('user.destroy', $value) }}" method="POST"
                                                    onsubmit="return confirm('Bạn thực sự muốn xóa người dùng này?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        {{ $users->links() }}
                    </div>
            </div>  
        </div>
        <!-- /.card-body -->
        
        <!-- /.card -->
    </section>
@endsection