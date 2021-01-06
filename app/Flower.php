<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $guarded;
    
    public function category(){
        return $this->belongsTo('App\Category','id');
    }

    public function review(){
        return $this->hasMany('App\Reviews');
    }
}
