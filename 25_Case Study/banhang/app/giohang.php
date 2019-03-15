<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\sanpham;
class giohang extends Model
{
  protected $table='giohang';
  public function sanpham(){
      return $this->belongsTo('App\sanpham');
  }
}
