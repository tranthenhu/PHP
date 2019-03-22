<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(user::class);
        $this->call(phanloai::class);
         $this->call(sanpham::class);
         $this->call(banner::class);
         
         
    }
}
