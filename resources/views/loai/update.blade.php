@extends('backend.layout.index')
@section('title')
Thêm mới loại sản phẩm
@endsection
@section('main-content')
<h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
<form id="frmCapNhatLoaiSanPham" method="post" action="{{ route('danhsachloai.update')}}">
  {{ csrf_field()}}
              
              <div class="box-body">
                <div class="form-group">
                  <label for="l_ten">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="l_ten" value="{{ $loai->l_ten }}" placeholder=" Tên loại sản phẩm">
                </div>
                </div>
                <div class="form-group">
                  <label for="l_taoMoi">Ngày tạo mới</label>
                  <input type="text" class="form-control" id="l_taoMoi" value="{{ $loai->l_taoMoi }}" placeholder=" Tạo mới">
                </div>
                
                
                <div class="form-group">
                  <label for="l_capNhat">Ngày cập nhật</label>
                  <input type="text" class="form-control" id="l_capNhat" value="{{ $loai->l_capNhat }}" placeholder=" Cập nhật">
                </div>

                
                <div class="form-group">
                  <label for="l_trangThai">Trang Thái</label>
                    <select name='l_trangThai'>
                    <option value="2" {{ $loai->l_trangThai ==1 ? "selected" : ""}} >Khả dụng</option>
                    <option value="1" {{ $loai->l_trangThai ==2 ? "selected" : ""}}>Khóa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
@endsection
