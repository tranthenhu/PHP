<?php

use Illuminate\Database\Seeder;

class banner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bannerImage')->insert([
            [ 'image'=>'images/0LD8EjKjsFRMxsFR4lOPZJyr0tnnC8kfvwCLXmZB.jpeg'],
            [ 'image'=>'images/3NX1WDTHlHijvgaNCBLx7w8mKsgF67NmTgalXkZk.jpeg'],
            [ 'image'=>'images/5Zw1TyJB9BCsAOUql5LpFwUVKhhalWjouF9V7ZjB.jpeg'],
            [ 'image'=>'images/6l026McO2DHDPoRttbGkbBnmZ0gCjFSeDrAJOTCr.jpeg'],
            [ 'image'=>'images/7VUa0mUgoRIfE6Ki6eEbfHa7EwY8QjEbd3knn6vi.jpeg'],
            [ 'image'=>'images/8KXhS3oKqYeKQexvUUwp1fjZcK1uEX0XjuxLodKB.jpeg'],
            [ 'image'=>'images/9cfAWAaVfCo84LGqvUxTVb0RIuRkZfd30ur0LWwt.jpeg'],
            [ 'image'=>'images/ALib7EBg2jZhHMoJbH1VbigaNajAaVTP7CIp7gjo.jpeg'],
            [ 'image'=>'images/aoa9BGVMABl1CjXXc073RfZLjbDI0xuolhXt9Bjy.jpeg'],
        ]); 
    }
}
