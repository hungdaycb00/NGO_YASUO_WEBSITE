<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table='status_tbl';
    public function Events(){
        return $this->hasMany('App\Events','id','id');
    }
    public function Donate(){
        return $this->hasMany('App\Donate','id','id');
    }
//    public function Donator(){
//        return $this->hasMany('App\Donate','id','money_status');
//    }
}
