<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\giohang;
use App\phanloai;
class sanpham extends Model
{
    protected $table='sanpham';
    public function phanloai(){
        return $this->belongsTo('App\phanloai');
    }
    public function giohang(){
        return $this->hasMany('App\giohang');
    }
}