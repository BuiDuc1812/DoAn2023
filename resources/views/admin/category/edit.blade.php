@extends('main')
@section('title','Chỉnh sửa danh mục')
@section('noidung')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">CHỈNH SỬA DANH MỤC</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">
                </p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('category.update',$cate)}}">
                            @csrf
                            @method('PUT')
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$cate->name}}"onkeyup="ChangeToSlug();">
                                
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleInputEmail1">Tên đường dẫn</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{$cate->slug}}">
                                
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="0"{{$cate->status == 0 ? 'checked': ''}}> Ẩn
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="" value="1"{{$cate->status ? 'checked': ''}}> Hiện
                                    </label>
                                </div>
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
<script>
    function ChangeToSlug()
            {
                var name, slug;
 
                //Lấy text từ thẻ input title 
                name = document.getElementById("name").value;
 
                //Đổi chữ hoa thành chữ thường
                slug = name.toLowerCase();
 
                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                document.getElementById('slug').value = slug;
            }
</script>