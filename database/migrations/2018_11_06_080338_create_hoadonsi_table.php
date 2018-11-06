<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonsi', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('hds_ma')
                    ->autoIncrement();
                $table->string('hds_nguoiMuaHang',100);
                $table->string('hds_tenDonVi',200);
                $table->string('hds_diaChi',250);
                $table->string('hds_maSoThue',14);
                $table->string('hds_soTaiKhoan',20);

                $table->foreign(['nv_lapHoaDon'])
                    ->references('nv_lapHoaDon')
                    ->on('nhanvien');
                
                $table->dateTime('hds_ngayXuatHoaDon')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->unsignedSmallInteger('hds_thuTruong')
                    ->default('1');
                    $table->dateTime('hds_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                    $table->dateTime('hds_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                
                $table->unsignedTinyInteger('dh_trangThai')
                    ->default('1');
                $table->foreign(['dh_ma'])
                    ->references('dh_ma')
                    ->on('donhang');
                $table->foreign(['tt_ma'])
                    ->references('tt_ma')
                    ->on('thanhtoan');
               
                $table->primary(['hds_ma']);
        }
    ); DB::statement("ALERT TABLE 'hoadonsi' comment 'Hóa đơn sỉ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonsi');
    }
}
