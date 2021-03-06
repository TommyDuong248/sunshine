@extends('backend.layout.index')
@section('title')
Thêm mới loại sản phẩm
@endsection
@section('main-content')
<h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
<form id="frmThemMoiLoaiSanPham" method="post" action="{{ route('danhsachloai.create')}}">
  {{ csrf_field() }}
              
              <div class="box-body">
                <div class="form-group">
                  <label for="l_ten">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="l_ten" name="l_ten" placeholder=" Tên loại sản phẩm">
                </div>
                </div>
                <div class="form-group">
                  <label for="l_taoMoi">Ngày tạo mới</label>
                  <input type="text" class="form-control" id="l_taoMoi" name="l_taoMoi" placeholder=" Tạo mới">
                </div>
                
                
                <div class="form-group">
                  <label for="l_capNhat">Ngày cập nhật</label>
                  <input type="text" class="form-control" id="l_capNhat" name="l_capNhat" placeholder=" Cập nhật">
                </div>

                
                <div class="form-group">
                  <label for="l_trangThai">Trang Thái</label>
                    <select name='l_trangThai'>
                    <option value="2">Khả dụng</option>
                    <option value="1">Khóa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
@endsection
