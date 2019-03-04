<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blogseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

            $dataArray = [];
            for ($i = 0; $i < 20; $i++) {
                array_push($dataArray, [
                    'title' => str_random(10),
                    'contain' => date("Y-m-d", mt_rand(1, time())),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
            DB::table('blog')->insert($dataArray);
        
    }
}
