<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallInteger('xx_ma')
                ->comment('mã xuất xứ');
            $table->string('xx_ten',100)
                ->comment('tên xuất xứ');
            $table->timestamp('xx_taoMoi')
            ->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('Xuất xứ tạo mới');
            $table->timestamp('xx_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm cập nhật quyền');
            $table->unsignedTinyInteger('xx_trangThai')
                    ->default('2')
                    ->comment(' 1-đóng, 2-khả dụng');
                    $table->primary(['xx_ma']);
                    $table->unique(['xx_ten']);
            });
            
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatxu');
    }
}
