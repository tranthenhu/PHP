<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
        public function up()
        {
            Schema::create('posts', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('name',100);
                $table->string('dia chi',100);
            });
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
