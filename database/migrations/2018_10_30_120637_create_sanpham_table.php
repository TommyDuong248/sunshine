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
                    
                    ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
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
