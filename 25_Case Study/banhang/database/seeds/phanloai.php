<?php

use Illuminate\Database\Seeder;

class phanloai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phanloai')->insert([
            [ 'ten' => 'nokia'],
            [ 'ten' => 'samsung'],
            [ 'ten' => 'iphone'],
            [ 'ten' => 'oppo']]


        );
    }
}
