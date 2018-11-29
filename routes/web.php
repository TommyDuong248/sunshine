<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('test','TestController');

use App\Loai;
Route::get('/danhsachloai',function(){
    //Eloquent Model de lay du lieu
    $ds_loai = Loai::all(); // SELECT * FROM loai
    $json = json_encode($ds_loai);
    return $json;
});
/*
use App\ChuDe;
Route::get('/danhsachchude',function(){
    //Eloquent Model de lay du lieu
    //$ds_chude = ChuDe::all(); // SELECT * FROM chude
   $ds_chude = DB:: table('chude')->get(); 
   $json = json_encode($ds_chude);
    return $json;
});
use App\SanPham;
Route::get('/danhsachsanpham',function(){
    //Eloquent Model de lay du lieu
    $ds_sanpham = SanPham::all(); // SELECT * FROM chude
    $json = json_encode($ds_sanpham);
    return $json;
});
*/
// tencontroller@action
Route::get('admin/danhsachloai','LoaiController@index')->name('danhsachloai.index');
Route::get('admin/danhsachloai/create','LoaiController@create')->name('danhsachloai.create');
Route::get('admin/danhsachloai/{id}','LoaiController@edit')->name('danhsachloai.edit');
Route::put('admin/danhsachloai/{id}','LoaiController@update')->name('danhsachloai.update');
Route::post('admin/danhsachloai/create','LoaiController@store')->name('danhsachloai.store');
Route::delete('admin/danhsachloai/{id}','LoaiController@destroy')->name('danhsachloai.destroy');
Route::get('admin/danhsachchude','ChuDeController@index')->name('danhsachchude.index');
Route::get('admin/danhsachsanpham','SanPhamController@index')->name('danhsachsanpham.index');
Route::get('admin/danhsachsanpham','SanPhamController@create')->name('danhsachsanpham.create');
Route::post('admin/danhsachsanpham','SanPhamController@store')->name('danhsachsanpham.store');
Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
Route::get('/admin/danhsachsanpham/pdf', 'SanPhamController@pdf')->name('danhsachsanpham.pdf');
route::resource('admin/danhsachsanpham','SanPhamController');