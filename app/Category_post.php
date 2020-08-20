<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_post extends Model
{
    //
    protected $table='category_post';

    public function list_post(){
        return $this->hasMany('App\list_post','category_id','category_id');
    }
    public function Events(){
        return $this->hasMany('App\Events','category_id','category_id');
    }
    public function Donate(){
        return $this->hasMany('App\Donate','category_id','category_id');
    }
}
