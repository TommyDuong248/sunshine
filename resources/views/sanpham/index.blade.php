@extends('backend.layout.index')
@section('main-content')
<h1>Xin chao</h1>
<table>
    <thead>
    <tr>
        <th>Ma</th>
        <th>Ten</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ds_sanpham as $sanpham)
        <tr>
            <td>{{$sanpham ->sp_ma}}</td>
            <td>{{$sanpham ->sp_ten}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection