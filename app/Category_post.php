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
}
