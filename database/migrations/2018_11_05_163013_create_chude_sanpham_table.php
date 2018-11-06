<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign(['sp_ma'])
            ->references('sp_ma')
            ->on('sanpham');
            $table->foreign(['cd_ma'])
            ->references('cd_ma')
            ->on('chude');
            
    });
    DB::statement("ALERT TABLE 'chude_sanpham' comment 'Chu đề sản phẩm'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude_sanpham');
    }
}
