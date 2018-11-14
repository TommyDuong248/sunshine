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
    @foreach($ds_loai as $loai)
        <tr>
            <td>{{$loai ->l_ma}}</td>
            <td>{{$loai ->l_ten}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
