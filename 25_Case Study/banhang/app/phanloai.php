<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\sanpham;
class phanloai extends Model
{
    protected $table='phanloai';
    public function sanpham(){
        return $this->hasMany('App\sanpham');
    }
}
