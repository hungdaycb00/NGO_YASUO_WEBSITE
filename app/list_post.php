<?php

namespace App;
use App\Controllers;
use Illuminate\Database\Eloquent\Model;

class list_post extends Model
{
    //
    protected $table='list_post';
    public function categoryPost(){
        return $this->belongsTo('App\Category_post','category_id','category_id');
    }
}
