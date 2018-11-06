<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('loai', function (Blueprint $table) {
                $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('l_ma')
                    ->autoIncrement()
                    ->comment('Mã loại sản phẩm');
                $table->string('l_ten',50)
                    ->comment('Tên loại # Tên loại sản phầm');
                $table->timestamp('l_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm đầu tiên tạo loại sản phẩm');
                $table->timestamp('l_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Thời điểm đầu tiên tạo loại sản phẩm # Thời điểm cập nhật loại sản phẩm gần nhất');
                $table->tinyInteger('l_trangThai')
                    ->default('2')
                    ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
                $table->unique(['l_ten']);
                
                $table->primary(['l_ma']);
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
