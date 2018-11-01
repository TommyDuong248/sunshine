<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('cd_ma')
                    ->autoIncrement()
                    ->comment('Mã chủ đề');
                $table->string('cd_ten',50)
                    ->comment('Tên chủ đề');
                $table->timestamp('cd_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm đầu tiên tạo chủ đề');
                $table->timestamp('cd_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm cập nhật chủ đề');
                $table->unsignedTinyInteger('cd_trangThai')
                    ->comment(' 1-đóng, 2-khả dụng');
                $table->primary(['cd_ma']);
                $table->unique(['cd_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude');
    }
}
