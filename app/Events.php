<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
    protected $table='events_tbl';

    public function categoryPost(){
        return $this->belongsTo('App\Category_post','category_id','category_id');
    }
    public function donate(){
        return $this->hasMany('App\Donate','events_id','events_id');
    }
}
