<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopy', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('gy_ma')
                    ->autoIncrement();
                
                $table->dateTime('gy_thoiGian')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;
                $table->text('gy_noiDung');
                $table->foreign(['km_ma'])
                    ->references('km_ma')
                    ->on('khuyenmai');
                $table->foreign(['sp_ma'])
                    ->references('sp_ma')
                    ->on('sanpham');
                $table->unsignedTinyInteger('kh_trangThai')
                    ->default('3');
                $table->primary(['gy_ma']);
        }
    ); DB::statement("ALERT TABLE 'khachang' comment 'Khach hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gopy');
    }
}
