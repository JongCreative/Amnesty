<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function photos(){
        //a series can have more than 1 photo
        return $this->hasMany('App\Photo');
    }
}
