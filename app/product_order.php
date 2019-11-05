<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    //
    protected $table = 'product_order';
    public function product(){
        return $this->belongsTo('App\product','id_product','id');
    }
    public function orders(){
        return $this->belongsTo('App\orders','id_order','id');
    }
}
