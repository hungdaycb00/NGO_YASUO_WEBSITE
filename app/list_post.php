<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_post extends Model
{
    //
    protected $table='list_post';
    public function categoryPost(){
        return $this->belongsTo('app\Category_post','category_id','id');
    }
}
