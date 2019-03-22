<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table ='photos';
    protected $primaryKey ='id';
    protected $timestamp =true;

    public function user(){
        //when a photo gets uploaded it belongs to a user
        return $this->belongsTo('App\User');
    }
}
