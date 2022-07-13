<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class vendor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendor')->insert(['name' => 'Jay','email' => 'jay@gmail.com',]);
        DB::table('vendor')->insert(['name' => 'Kishn','email' => 'Kishn@gmail.com',]);
        DB::table('vendor')->insert(['name' => 'Pares','email' => 'Pares@gmail.com',]);
    }
}
