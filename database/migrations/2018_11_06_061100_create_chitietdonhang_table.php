<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                
            $table->foreign(['dh_ma'])
            ->references('dh_ma')
            ->on('donhang');
       
            $table->foreign(['sp_ma'])
                ->references('sp_ma')
                ->on('sanpham');

            $table->foreign(['m_ma'])
                ->references('m_ma')
                ->on('mau');
                            
            $table->unsignedSmallInteger('ctdh_soLuong')
                ->default('1');

            $table->unsignedInteger('ctdh_donGia')
                ->default('1');
        }
    ); DB::statement("ALERT TABLE 'chitietdonhang' comment 'chi tiết đơn hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
