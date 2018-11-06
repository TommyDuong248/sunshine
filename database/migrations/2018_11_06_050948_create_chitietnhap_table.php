<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                
                $table->foreign(['pn_ma'])
                    ->references('pn_ma')
                    ->on('phieunhap');
               
                $table->foreign(['sp_ma'])
                    ->references('sp_ma')
                    ->on('sanpham');

                $table->foreign(['m_ma'])
                    ->references('m_ma')
                    ->on('mau');
                                
                $table->unsignedSmallInteger('ctn_soLuong')
                    ->default('1')
                    ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
                $table->unsignedInteger('ctn_donGia')
                    ->default('1');
                
        }
    ); DB::statement("ALERT TABLE 'chitietnhap' comment 'Chi tiết nhập'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietnhap');
    }
}
