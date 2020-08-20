<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    //
    protected $table='donate_tbl';

    public function category(){
        return $this->belongsTo('App\Category_post','category_id','category_id');
    }
    public function events(){
        return $this->belongsTo('App\Events','events_id','events_id');
    }
}
