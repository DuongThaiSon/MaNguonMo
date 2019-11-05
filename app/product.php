<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table ='product';
    public function categories(){
        return $this->belongsTo('App\categories','id_category','id');
    }
    public function product_order(){
        return $this->hasMany('App\product_order','id_product','id');
    }
}
