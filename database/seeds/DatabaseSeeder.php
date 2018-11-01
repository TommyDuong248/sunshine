<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DatabaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder:class);
        $this->call(ChuDeTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        }
}
