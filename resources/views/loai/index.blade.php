@extends('backend.layout.index')

@section('title')
Danh sach loai san pham
@endsection

@section('main-content')
<a href="{{route('danhsachloai.create')}}">Thêm mới loại</a>
<h1><span style="color:red;">DANH SÁCH LOẠI SẢN PHẨM</span></h1>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach
<table border='1'>
    <thead>
    <tr>
        <th>Ma</th>
        <th>Ten</th>
        <td>Action</td>
        <td>Xóa</td>
    </tr>
    </thead>
    <tbody>
    @foreach($ds_loai as $loai)
        <tr>
            <td>{{$loai ->l_ma}}</td>
            <td>{{$loai ->l_ten}}</td>
            <td><a href="{{ route('danhsachloai.edit',['id'=> $loai->l_ma]) }}">Sua</a></td>
            <td>
                <form method="post" action="{{ route('danhsachloai.destroy',['id'=> $loai->l_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
