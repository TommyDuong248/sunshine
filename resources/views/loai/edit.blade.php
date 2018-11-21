@extends('backend.layout.index')

@section('title')
Danh sach loai san pham
@endsection

@section('main-content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{route('danhsachloai.create')}}">Thêm mới loại</a>
<h1><span style="color:red;">DANH SÁCH LOẠI SẢN PHẨM</span></h1>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach


    
<h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
<form id="frmCapNhatLoaiSanPham" method="post" action="{{ route('danhsachloai.update', ['id'=> $loai->l_ma]) }}">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field()}}
              
              <div class="box-body">
                <div class="form-group">
                  <label for="l_ten">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="l_ten" name="l_ten" value="{{ $loai->l_ten }}" placeholder=" Tên loại sản phẩm">
                </div>
                </div>
                <div class="form-group">
                  <label for="l_taoMoi">Ngày tạo mới</label>
                  <input type="text" class="form-control" id="l_taoMoi" name="l_taoMoi" value="{{ $loai->l_taoMoi }}" placeholder=" Tạo mới">
                </div>
                
                
                <div class="form-group">
                  <label for="l_capNhat">Ngày cập nhật</label>
                  <input type="text" class="form-control" id="l_capNhat" name="l_capNhat" value="{{ $loai->l_capNhat }}" placeholder=" Cập nhật">
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
