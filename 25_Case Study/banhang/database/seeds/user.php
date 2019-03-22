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
            [ 'name' => 'nhuAdmin','email'=>'nhuAdmin@yahoo.com','password'=> bcrypt('4810221548'),'role'=>2],
            [ 'name' => 'nhu1','email'=>'nhu1@yahoo.com','password'=> bcrypt('4810221548'),'role'=>1],
            [ 'name' => 'nhu2','email'=>'nhu2A@yahoo.com','password'=> bcrypt('4810221548'),'role'=>1],
            [ 'name' => 'nhu3','email'=>'nhu3A@yahoo.com','password'=> bcrypt('4810221548'),'role'=>0],
            [ 'name' => 'nhu4','email'=>'nhu4A@yahoo.com','password'=> bcrypt('4810221548'),'role'=>0],
            [ 'name' => 'nhu5','email'=>'nhu5A@yahoo.com','password'=> bcrypt('4810221548'),'role'=>0],
            [ 'name' => 'nhu6','email'=>'nhu6A@yahoo.com','password'=> bcrypt('4810221548'),'role'=>0],
        ]);
    }
}
