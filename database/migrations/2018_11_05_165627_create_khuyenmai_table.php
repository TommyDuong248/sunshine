<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('km_ma')
                    ->autoIncrement()
                ;
                $table->string('km_ten',200)
                ;
                $table->text('km_noiDung')
                ;
                $table->dateTime('km_batDau')
                ;
                $table->dateTime('km_ketThuc')
                ->default(DB::raw('NULL'))
                ;
                $table->string('km_giaTri',50)
                ->default('100;100');
                $table->foreign(['nv_nguoiLap'])
                    ->references('nv_nguoiLap')
                    ->on('nhanvien');
                $table->dateTime('km_ngayLap')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;
                $table->foreign(['nv_kyNhay'])
                    ->references('nv_kyNhay')
                    ->on('nhanvien');
                $table->dateTime('km_ngayKyNhay')
                    ->default(DB::raw('NULL'));
                $table->foreign(['nv_kyDuyet'])
                    ->references('nv_kyDuyet')
                    ->on('nhanvien');
                $table->dateTime('km_ngayDuyet')
                    ->default(DB::raw('NULL'));
                $table->dateTime('km_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;  
                $table->dateTime('km_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;  
                $table->unsignedTinyInteger('km_trangThai')
                    ->default('2')
                    ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
                
                //$table->primary(['km_ma']);
        }
    ); DB::statement("ALERT TABLE 'khuyenmai' comment 'Khuyen mãi'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
