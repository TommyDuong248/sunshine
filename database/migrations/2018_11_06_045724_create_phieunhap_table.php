<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('pn_ma')
                    ->autoIncrement()
                    ->comment('Mã phiếu nhập');
                $table->string('pn_nguoiGiao',100)
                ;
                $table->string('pn_soHoaDon',15)
                ;
                $table->dateTime('pn_ngayXuatHoaDon')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->text('pn_ghiChu')
                    ->default('NULL')
                ;
                $table->foreign(['nv_nguoiLapPhieu'])
                    ->references('nv_nguoiLapPhieu')
                    ->on('nhanvien');
                $table->dateTime('pn_ngayLapPhieu')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->foreign(['nv_keToan'])
                    ->references('nv_keToan')
                    ->on('nhanvien');
                $table->dateTime('pn_ngayXacNhan')
                    ->default('NULL');
                $table->foreign(['nv_thuKho'])
                    ->references('nv_thuKho')
                    ->on('nhanvien');
                $table->dateTime('pn_ngayNhapKho')
                    ->default('NULL');
                $table->dateTime('pn_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->dateTime('pn_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                
                $table->unsignedTinyInteger('pn_trangThai')
                    ->default('2')
                    ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
                $table->unique(['pn_soHoaDon']);
                $table->foreign(['ncc_ma'])
                    ->references('ncc_ma')
                    ->on('nhacungcap');
                $table->primary(['pn_ma']);
        }
    ); DB::statement("ALERT TABLE 'phieunhap' comment 'Phiếu nhập'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
