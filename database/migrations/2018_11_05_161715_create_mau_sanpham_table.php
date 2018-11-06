<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign(['sp_ma'])
            ->references('sp_ma')
            ->on('sanpham');
            $table->foreign(['m_ma'])
            ->references('m_ma')
            ->on('mau');
            $table->unsignedSmallInteger('msp_soLuong')
                    ->default('0');
    });
    DB::statement("ALERT TABLE 'mau_sanpham' comment 'Mẫu sản phẩm'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau_sanpham');
    }
}
