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
});
/*
use App\Loai;
Route::get('danhsachloai', funtion(){

    //Eloquent Model
    $ds_loai = Loai::all();
    //Query Builder
    $ds_loai = DB::table('loai')->get();

    $join = $json_encode($ds_loai);
    return $json;
}
);
*/
route::get('/danhsachloai','LoaiController@index')->name('danhsachloai.index');
route::get('/danhsachloai/create','LoaiController@create')->name('danhsachloai.create');
route::post('/danhsachloai/create','SanPhamController@store')->name('danhsachsanpham.store');
route::get('/danhsachsanpham','SanPhamController@index')->name('danhsachsanpham.index');
