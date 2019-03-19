<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\giohang;
use App\phanloai;
use App\User;
use App\sanpham;
class sanpham extends Model
{
    protected $table='sanpham';
    public function phanloai(){
        return $this->belongsTo(phanloai::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_sanpham')->withPivot('soluong');
    }
}