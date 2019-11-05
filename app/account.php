<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    //
    protected $table ='account';
    public function orders(){
        return $this->hasMany('App\orders','id_saleman','id');
    }
}
