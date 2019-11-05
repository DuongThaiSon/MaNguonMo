<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    protected $table = 'categories';
    public function product(){
        return $this->hasMany('App\product','id_category','id');
    }
}
