<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallInteger('ncc_ma')
                ->comment('mã nhà cung cấp');
            $table->string('ncc_ten',200)
                ->comment('tên nhà cung cấp');
            $table->string('ncc_daiDien',100)
                ->comment('tên nhà đại diện');
            $table->string('ncc_diaChi',250)
                ->comment('Địa chỉ');
            $table->string('ncc_dienThoai',11)
                ->comment('SDT');
            $table->timestamp('ncc_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Nhà cung cấp tạo mới');
            $table->timestamp('ncc_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Thời điểm cập nhật');
            $table->unsignedTinyInteger('ncc_trangThai')
                    ->default('2')
                    ->comment(' 1-đóng, 2-khả dụng');
            $table->primary(['ncc_ma']);
            $table->unique(['ncc_ten']);
            $table->foreign(['xx_ma'])
                    ->references('xx_ma')
                    ->on('xuatxu');
            });
            DB::statement("ALERT TABLE 'nhacungcap' comment 'Nhà cung cấp'");
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
