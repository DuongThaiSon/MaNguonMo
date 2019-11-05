<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    protected $table ='orders';
    public function account(){
        return $this->belongsTo('App\account','id_saleman','id');
    }
    public function product_order(){
        return $this->hasMany('App\product_order','id_order','id');
    }
}
