<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 'name' => 'nhuAdmin','email'=>'nhuAdmin@yahoo.com','password'=> bcrypt('4810221548'),'role'=>1],
            [ 'name' => 'nhu1','email'=>'nhu1@yahoo.com','password'=> bcrypt('4810221548'),'role'=>0],
            [ 'name' => 'nhu2','email'=>'nhu2A@yahoo.com','password'=> bcrypt('4810221548'),'role'=>0],
           


        ]);
    }
}
