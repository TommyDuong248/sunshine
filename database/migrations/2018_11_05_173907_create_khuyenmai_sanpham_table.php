<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->foreign(['km_ma'])
                    ->references('km_ma')
                    ->on('khuyenmai');
            $table->foreign(['sp_ma'])
                    ->references('sp_ma')
                    ->on('sanpham');
            $table->foreign(['m_ma'])
                    ->references('m_ma')
                    ->on('mau');
            $table->string('kmsp_giaTri',50)
                ->default('100;0');
            $table->unsignedTinyInteger('kmsp_trangThai')
                ->default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai_sanpham');
    }
}
