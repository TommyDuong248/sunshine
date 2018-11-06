<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedtinyInteger('m_ma')
                ->comment('mã mẫu');
            $table->string('m_ten',50)
                ->comment('tên mẫu');
            $table->timestamp('m_taoMoi')
            ->default(DB::raw('CURRENT_TIMESTAMP'));
            
            $table->timestamp('m_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('m_trangThai')
                    ->default('2')
                    ->comment(' 1-đóng, 2-khả dụng');
                    $table->primary(['m_ma']);
                    $table->unique(['m_ten']);
            });
            DB::statement("ALERT TABLE 'mau' comment 'Mẫu'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau');
    }
}
