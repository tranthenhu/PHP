<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';

    public function blog(){
        return $this->hasMany('App\blog','category_id');
      }
}
