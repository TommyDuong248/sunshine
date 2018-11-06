<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonle', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('dhl_ma')
                    ->autoIncrement();
               
                $table->string('hdl_nguoiMuaHang',100);
                
                $table->string('hdl_dienThoai',11);
                
                $table->string('hdl_diaChi',250);
                
                $table->foreign(['nv_lapHoaDon'])
                    ->references('nv_lapHoaDon')
                    ->on('nhanvien');
                $table->timestamp('hdl_ngayXuatHoaDon')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->foreign(['dh_ma'])
                    ->references('dh_ma')
                    ->on('donhang');
                               
                $table->primary(['hdl_ma']);
        }
    ); DB::statement("ALERT TABLE 'hoadonle' comment 'Đơn hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonle');
    }
}
