<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
                $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('tt_ma')
                    ->autoIncrement();

                
                $table->string('tt_ten',200)
                ;
                $table->text('tt_dienGia')
                ;
                $table->dateTime('tt_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->dateTime('tt_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                
                $table->unsignedTinyInteger('tt_trangThai')
                    ->default('2');
                $table->unique(['tt_ten']);
                
                $table->primary(['tt_ma']);
        }
    ); DB::statement("ALERT TABLE 'thanhtoan' comment 'Thanh toán'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
