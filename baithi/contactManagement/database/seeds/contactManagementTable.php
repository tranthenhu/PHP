<?php

use Illuminate\Database\Seeder;

class contactManagementTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactManagement')->insert([
            [ 'ten' => 'Van A', 'ho'=> 'Tran','sodienthoai'=>'123456','email'=>'TranVanA@yahoo.com','diachi'=>"dia chi 1"],
            [ 'ten' => 'Van B', 'ho'=> 'Nguyen','sodienthoai'=>'123456','email'=>'TranVanB@yahoo.com','diachi'=>"dia chi 2"],
            [ 'ten' => 'Van C', 'ho'=> 'tran','sodienthoai'=>'123456','email'=>'TranVanC@yahoo.com','diachi'=>"dia chi 3"],
            [ 'ten' => 'Van D', 'ho'=> 'Nguyen','sodienthoai'=>'123456','email'=>'TranVanD@yahoo.com','diachi'=>"dia chi 4"],
            [ 'ten' => 'Van E', 'ho'=> 'tran','sodienthoai'=>'123456','email'=>'TranVanE@yahoo.com','diachi'=>"dia chi 5"],
            [ 'ten' => 'Van F', 'ho'=> 'Nguyen','sodienthoai'=>'123456','email'=>'TranVanF@yahoo.com','diachi'=>"dia chi 6"],
            [ 'ten' => 'Van G', 'ho'=> 'tran','sodienthoai'=>'123456','email'=>'TranVanG@yahoo.com','diachi'=>"dia chi 7"],
        ]); 
    
    }
}
