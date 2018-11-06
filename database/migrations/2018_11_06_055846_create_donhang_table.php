<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
                $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('dh_ma')
                    ->autoIncrement();
                $table->foreign(['kh_ma'])
                    ->references('kh_ma')
                    ->on('khachhang');
                
                $table->dateTime('dh_thoiGianDatHang')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->dateTime('dh_thoiNhanHang');
                $table->string('dh_nguoiNhan',100);
                $table->string('dh_diaChi',250);
                $table->string('dh_dienThoai',11);
                $table->string('dh_nguoiGui',100);
                $table->text('dh_loiChuc');
                $table->unsignedTinyInteger('dh_daThanhToan')
                    ->default('0');
                $table->foreign(['nv_xuLy'])
                    ->references('nv_xuLy')
                    ->on('nhanvien');
                $table->dateTime('dh_ngayXuLy')
                    ->default('NULL');
                $table->foreign(['nv_giaoHang'])
                    ->references('nv_giaoHang')
                    ->on('nhanvien');
                $table->dateTime('dh_ngayLapPhieuGiao')
                    ->default('NULL');
                $table->dateTime('dh_ngayGiaoHang')
                    ->default('NULL');
                    $table->timestamp('dh_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('dh_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;
                $table->unsignedTinyInteger('dh_trangThai')
                    ->default('1');
                $table->unsignedTinyInteger('vc_ma');
                $table->unsignedTinyInteger('tt_ma');
               
                $table->primary(['tt_ma']);
        }
    ); DB::statement("ALERT TABLE 'donhang' comment 'Đơn hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
