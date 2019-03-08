<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class blog extends Model
{
    protected $table = 'blog';

    public function categorys(){
        return $this->belongsTo('App\category','category_id');
      }
}
