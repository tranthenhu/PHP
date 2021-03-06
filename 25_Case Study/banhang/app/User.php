<?php

namespace App;
use App\giohang;
use App\phanloai;
use App\User;
use App\sanpham;
use App\ratting;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  
    public function sanphams()
    {
        return $this->belongsToMany(sanpham::class, 'user_sanpham')->withPivot('soluong');
    }

    public function sanphamsComment()
    {
        return $this->belongsToMany(sanpham::class, 'user_sanpham_comment')->withPivot('comment','username');
    }

    public function sanphamsRatting()
    {
        return $this->belongsToMany(sanpham::class, 'user_sanpham_ratting')->withPivot('ratting');
    }
}
