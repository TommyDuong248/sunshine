<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('sp_ma')
                    ->autoIncrement()
                    ->comment('Mã sản phẩm');
                $table->string('sp_ten',200)
                    ->comment('Tên  sản phầm');
                $table->integer('sp_giaGoc')
                    ->default('0')
                    ->comment('Giá sản phẩm');
                $table->integer('sp_giaBan')
                    ->default('0')
                    ->comment('Giá bán sản phẩm');
                $table->string('sp_hinh',200)
                    ->comment('Hình sản phẩm');
                $table->text('sp_thongTin')
                    ->comment('Thông tin sản phẩm');    
                $table->string('sp_danhGia',50)
                    ->comment('Đánh giá sản phẩm');
                $table->timestamp('sp_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Sản phẩm tạo mới');
                $table->timestamp('sp_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Sản phẩm cập nhật');
                $table->unsignedTinyInteger('sp_trangThai')
                    ->default('2')
                    ->comment('Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
                $table->unsignedTinyInteger('l_ma');
                 
                $table->foreign(['l_ma'])
                    ->references('l_ma')
                    ->on('loai');
                //$table->primary(['sp_ma']);
                //$table->unique(['sp_ten']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
