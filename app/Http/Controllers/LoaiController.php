<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;
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
    }
}
