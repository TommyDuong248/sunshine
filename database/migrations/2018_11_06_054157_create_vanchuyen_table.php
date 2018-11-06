<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanchuyeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuye', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('vc_ma')
                    ->autoIncrement();

                
                $table->string('vc_ten',200)
                ;
                $table->text('vc_dienGia')
                ;
                $table->dateTime('vc_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->dateTime('vc_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                
                $table->unsignedTinyInteger('vc_trangThai')
                    ->default('2');
                $table->unique(['tt_ten']);
                
                $table->primary(['vc_ma']);
        }
    ); DB::statement("ALERT TABLE 'vanchuyen' comment 'Van chuyển'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuye');
    }
}
