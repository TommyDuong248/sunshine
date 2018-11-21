<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;
use Session;
use Validator;
use App\Http\Requests\LoaiRequest;
class LoaiController extends Controller
{
    public function index()
    {
        $ds_loai = Loai::all();
        return view('loai.index')
        ->with('ds_loai',$ds_loai);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $loai = new Loai();
        $loai->l_ten = $request->l_ten;
        $loai->l_taoMoi = $request->l_taoMoi;
        $loai->l_capNhat = $request->l_capNhat;
        $loai->l_trangThai = $request->l_trangThai;
        $loai->save();
        Session::flash('alert-success', 'Nhập dữ liệu thành công');
        return redirect()->route('danhsachloai.index');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loai = Loai::where("l_ma", $id)->first();
        return view('loai.edit')->with('loai',$loai);
        
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LoaiRequest $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'l_ten' => 'required|unique:posts|max:60',
        //     'l_taoMoi' => 'required',
        //     'l_capNhat' => 'required',
        //     'l_trangThai' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect(route('danhsachloai.edit', ['id' => $id]))
        //                 ->withErrors($validator)
        //                 ->withInput();
        //}
        $loai = Loai::where("l_ma", $id)->first();
        $loai->l_ten = $request->l_ten;
        $loai->l_taoMoi = $request->l_taoMoi;
        $loai->l_capNhat = $request->l_capNhat;
        $loai->l_trangThai = $request->l_trangThai;
        $loai->save();
        
        Session::flash('alert-success', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachloai.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $loai = Loai::where("l_ma", $id)->first();
      $loai->delete();
      Session::flash('alert-danger', 'Xóa dữ liệu thành công');
      return redirect()->route('danhsachloai.index');
    }
}


