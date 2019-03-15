<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giohang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('soluong');
            $table->integer('sanpham_id')->unsigned();
            $table->foreign('sanpham_id')
            ->references('id')
            ->on('sanpham')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('sanpham');
    }
}
