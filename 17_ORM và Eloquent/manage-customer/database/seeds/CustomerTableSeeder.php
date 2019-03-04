<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
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
              'content' => str_random(20),
            
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
          ]);
      }
      DB::table('task')->insert($dataArray);
  }

}
