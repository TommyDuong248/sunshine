<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyInteger('ha_stt')
            ->default('1');
        
            $table->string('ha_ten',150)
            ->comment('tên hình ảnh');
        
            $table->foreign(['sp_ma'])
                ->references('sp_ma')
                ->on('sanpham');
        });
        DB::statement("ALERT TABLE 'hinhanh' comment 'Hinh ảnh'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
