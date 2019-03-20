<?php

use Illuminate\Database\Seeder;

class sanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sanpham')->insert([
            [ 'ten' => 'nokia1', 'gia'=> 100,'image'=>'images/0LD8EjKjsFRMxsFR4lOPZJyr0tnnC8kfvwCLXmZB.jpeg','chitiet'=>'mon hang 1','phanloai_id'=>1],
            [ 'ten' => 'nokia2', 'gia'=> 200,'image'=>'images/XJGQGLs31YE4y0DXPtOz6zHgkFU1DJJPbQI0q8gG.jpeg','chitiet'=>'mon hang 2','phanloai_id'=>1],
            [ 'ten' => 'nokia3', 'gia'=> 300,'image'=>'images/1n3HXef99ZH7MW9a4iOoeNlTtc6OZGOqGEo56r5P.jpeg','chitiet'=>'mon hang 3','phanloai_id'=>1],
            [ 'ten' => 'nokia4', 'gia'=> 400,'image'=>'images/YPv2U88kmrLgbNFOENYsozlenIwCCu0rSYfpB0KZ.jpeg','chitiet'=>'mon hang 4','phanloai_id'=>1],
            [ 'ten' => 'samsung1', 'gia'=> 100,'image'=>'images/3NX1WDTHlHijvgaNCBLx7w8mKsgF67NmTgalXkZk.jpeg','chitiet'=>'mon hang samsung 1','phanloai_id'=>2],
            [ 'ten' => 'samsung2', 'gia'=> 200,'image'=>'images/5Zw1TyJB9BCsAOUql5LpFwUVKhhalWjouF9V7ZjB.jpeg','chitiet'=>'mon hang samsung 2','phanloai_id'=>2],
            [ 'ten' => 'samsung3', 'gia'=> 300,'image'=>'images/6l026McO2DHDPoRttbGkbBnmZ0gCjFSeDrAJOTCr.jpeg','chitiet'=>'mon hang samsung 3','phanloai_id'=>2],
            [ 'ten' => 'samsung4', 'gia'=> 400,'image'=>'images/7Wpg3Tbldt5j3CQqTTmoO3TidrxqfQjmQZa4CFsE.jpeg','chitiet'=>'mon hang samsung 4','phanloai_id'=>2],
            [ 'ten' => 'iphone1', 'gia'=> 100,'image'=>'images/8KXhS3oKqYeKQexvUUwp1fjZcK1uEX0XjuxLodKB.jpeg','chitiet'=>'mon hang iphone 1','phanloai_id'=>3],
            [ 'ten' => 'iphone2', 'gia'=> 200,'image'=>'images/9cfAWAaVfCo84LGqvUxTVb0RIuRkZfd30ur0LWwt.jpeg','chitiet'=>'mon hang iphone 2','phanloai_id'=>3],
            [ 'ten' => 'iphone3', 'gia'=> 300,'image'=>'images/ALib7EBg2jZhHMoJbH1VbigaNajAaVTP7CIp7gjo.jpeg','chitiet'=>'mon hang iphone 3','phanloai_id'=>3],
            [ 'ten' => 'iphone4', 'gia'=> 400,'image'=>'images/aoa9BGVMABl1CjXXc073RfZLjbDI0xuolhXt9Bjy.jpeg','chitiet'=>'mon hang iphone 4','phanloai_id'=>3]
        ]); 
    }
}
